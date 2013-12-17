<?php


/**
 * Generates minified version of Nette Framework.
 *
 * @param  string  path to Nette
 * @param  string  path to nette.phar
 * @return void
 */
$project->minify = function($source, $dest) use ($project) {
	$project->log("Generates minified version $dest");

	$project->copy($source, $tmp = $source . '.tmp');

	$comment = '';
	foreach (new RecursiveIteratorIterator(new RecursiveDirectoryIterator($tmp, RecursiveDirectoryIterator::SKIP_DOTS)) as $file) {
		$shrink = new ShrinkPHP;
		$shrink->shrinkFile($file);
		if (basename($file) === 'loader.php') {
			$comment = $shrink->firstComment;
		}
	}

	$project->createDir(dirname($dest));
	$phar = new Phar($dest);
	$phar->buildFromDirectory($tmp);
	$phar->setStub("<?php\n$comment\nrequire 'phar://' . __FILE__ . '/loader.php';\n__HALT_COMPILER();");

	$project->delete($tmp);
};






class ShrinkPHP
{
	public $firstComment = NULL;

	public function shrinkFile($file)
	{
		$tokens = token_get_all(file_get_contents($file));
		$set = '!"#$&\'()*+,-./:;<=>?@[\]^`{|}';
		$space = FALSE;
		$output = '';

		while (list(, $token) = each($tokens))
		{
			list($name, $token) = is_array($token) ? $token : array(NULL, $token);

			if ($name === T_COMMENT || $name === T_WHITESPACE) {
				$space = TRUE;
				continue;

			} elseif ($name === T_DOC_COMMENT) {
				if (!$this->firstComment) {
					$this->firstComment = $token;
					$space = TRUE;
					continue;

				} elseif (preg_match('# @[mA-Z]#', $token)) { // phpDoc annotations leave unchanged

				} else {
					$space = TRUE;
					continue;
				}

			} elseif ($token === ')' && substr($output, -1) === ',') {  // array(... ,)
				$output = substr($output, 0, -1);
			}

			if ($space) {
				if (strpos($set, substr($output, -1)) === FALSE && strpos($set, $token{0}) === FALSE) {
					$output .= "\n";
				}
				$space = FALSE;
			}

			$output .= $token;
		}

		$output = str_replace("\r\n", "\n", $output);
		$output = trim(preg_replace("#[\t ]+(\r?\n)#", '$1', $output)); // right trim
		file_put_contents($file, $output);
	}

}
