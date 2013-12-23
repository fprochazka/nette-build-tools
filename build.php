<?php

/**
 * Makefile for building Nette Framework.
 *
 * Call task 'main' to build a full release.
 * The release built will be stored in 'dist' directory.
 *
 * Can be used for version 2.1 or higher.
 */

require 'tools/Nette/nette.min.php';
use Nette\Utils\Finder;


// configuration
$project->gitExecutable = 'C:\Program Files (x86)\Git\bin\git.exe';
$project->phpExecutable = realpath('tools/PHP-5.3/php.exe');
$project->apiGenExecutable = realpath('tools/ApiGen/apigen.php');
$project->zipExecutable = realpath('tools/7zip/7z.exe');
$project->compilerExecutable = realpath('tools/Google-Closure-Compiler/compiler.jar');


// add custom tasks
require 'tasks/apiGen.php';
require 'tasks/git.php';
require 'tasks/latte.php';
require 'tasks/minify.php';
require 'tasks/minifyJs.php';
require 'tasks/netteLoader.php';
require 'tasks/php.php';
require 'tasks/zip.php';


/**
 * @param string  Git branch or tag
 * @param string  human readable version name
 */
$project->main = function($tag = 'master', $label = '2.0') use ($project) {
	$project->log("Building {$label}");

	$dir = "NetteFramework-{$label}";
	$distDir = "dist/" . substr($label, 0, 3);

	// export git
	$project->delete($dir);
	$project->gitClone('git://github.com/nette/nette.git', $tag, $dir);
	$project->gitClone('git://github.com/nette/examples.git', $tag, "$dir/examples");
	$project->gitClone('git://github.com/nette/sandbox.git', $tag, "$dir/sandbox");
	$project->gitClone('git://github.com/dg/adminer-custom.git', NULL, "$dir/sandbox/vendor/dg/adminer-custom");
	$project->gitClone('git://github.com/nette/tools.git', preg_replace('#^\D*(\d+\.\d+).*\z#', 'v$1', $tag), "$dir/tools");
	$project->gitClone('git://github.com/nette/tester.git', NULL, "$dir/tools/Tester");

	if (PHP_OS === 'WINNT') {
		$project->exec("attrib -H $dir\.htaccess* /s /d");
		$project->exec("attrib -R $dir\* /s /d");
	}

	// create version.txt
	$wcrev = $project->git('log -n 1 --pretty="%h"', $dir);
	$wcdate = $project->git('log -n 1 --pretty="%cd" --date=short', $dir);
	$project->write("$dir/version.txt", "Nette Framework $label (revision $wcrev released on $wcdate)");

	// remove git files
	foreach (Finder::findDirectories(".git")->from($dir)->childFirst() as $file) {
		$project->delete($file);
	}
	foreach (Finder::findFiles(".git*")->from($dir) as $file) {
		$project->delete($file);
	}

	// expand $WCREV$ and $WCDATE$
	foreach (Finder::findFiles('*.php', '*.txt')->from($dir)->exclude('3rdParty') as $file) {
		$project->replace($file, array(
			'#\$WCREV\$#' => $wcrev,
			'#\$WCDATE\$#' => $wcdate,
		));
	}

	// rename *.md and delete some files
	foreach (Finder::findFiles('*.md')->from($dir) as $file) {
		$project->rename($file, substr($file, 0, -2) . 'txt');
	}
	$project->delete("$dir/sandbox/license.txt");
	$project->delete("$dir/examples/license.txt");
	$project->delete("$dir/tools/license.txt");
	$project->delete("$dir/tools/Tester/license.txt");
	$project->delete("$dir/composer.json");
	$project->delete("$dir/.travis.yml");
	$project->copy(is_file("$dir/client-side/netteForms.js") ? "$dir/client-side/netteForms.js" : "$dir/client-side/forms/netteForms.js", "$dir/sandbox/www/js/netteForms.js");
	$project->replace("$dir/tests/run-tests.sh", array('#vendor/nette/tester#' => 'tools/Tester'));
	$project->replace("$dir/tests/RunTests.bat", array('#vendor\\\\nette\\\\tester#' => 'tools\Tester'));
	$project->replace("$dir/tests/Nette/bootstrap.php", array('#vendor/autoload.php#' => 'tools/Tester/Tester/bootstrap.php', '#Tester\\\\Helpers::setup\(\);#' => "require __DIR__ . '/../../Nette/loader.php';"));

	// build NetteLoader.php
	$project->netteLoader("$dir/Nette");

	// shrink JS & CSS
	foreach (Finder::findFiles('*.js', '*.css', '*.phtml')->from("$dir/Nette") as $file) {
		$project->minifyJs($file);
	}

	// build phar version
	$project->minify("$dir/Nette", "$dir/Nette-minified/nette.phar");

	// lint & try run PHP files
	$project->log("Linting files");
	$project->php("$dir/Nette-minified/nette.phar", $project->phpExecutable); // try run

	foreach (Finder::findFiles('*.php', '*.phpt')->from($dir)->exclude('tools') as $file) {
		if (strpos(file_get_contents($file), '@phpversion 5.4')) {
			continue;
		}
		$project->phpLint($file, $project->phpExecutable);
	}

	// copy Nette to submodules
	$project->copy("$dir/Nette", "$dir/sandbox/vendor/nette/nette/Nette");

	// build API doc
	$apiGenConfig = dirname($project->apiGenExecutable) . '/apigen.neon';
	$project->apiGen("$dir/Nette", "$dir/API-reference", $apiGenConfig, "Nette Framework $label API");

	$project->zip("$distDir/$dir.zip", $dir);
	$project->zip("$distDir/$dir.tar.bz2", $dir);


	// build PEAR
	$dirPear = "Nette-$label";
	$project->log("Building PEAR package");
	$project->delete($dirPear);
	$project->copy("$dir/Nette", "$dirPear/Nette");
	$project->copy("$dir/readme.txt", "$dirPear/readme.txt");
	$project->copy("$dir/license.txt", "$dirPear/license.txt");
	$project->latte("tasks/package.xml.latte", "package.xml", array(
		'time' => time(),
		'version' => $label,
		'state' => 'stable',
		'files' => Finder::findFiles('*')->from($dirPear),
	));

	$project->zip("$distDir/../pear/$dirPear.tgz", array($dirPear, "package.xml"));
	$project->delete("package.xml");
};
