<?php


/**
 * Executing GIT command.
 *
 * @param  string  command line
 * @param  string  path to .git folder
 * @return string  output
 *
 * @depend $project->gitExecutable
 */
$project->git = function($cmd, $dir = NULL) use ($project) {
	$project->log("Running GIT command $cmd");

	return $project->exec(escapeshellarg($project->gitExecutable)
		. ($dir ? ' --git-dir ' . escapeshellarg("$dir/.git") : '')
		. ' ' . $cmd
	);
};



/**
 * Executing GIT clone.
 *
 * @param  string  source URL
 * @param  string  branch
 * @param  string  destination folder
 * @return void
 *
 * @depend $project->gitExecutable
 */
$project->gitClone = function($url, $tag = NULL, $dir = NULL) use ($project) {
	$project->log("Clonnig GIT repository $url $tag");

	$project->exec(escapeshellarg($project->gitExecutable) . " clone --depth 1 --recursive $url" . ($tag ? " --branch $tag" : '')
		. ($dir ? ' ' . escapeshellarg($dir) : '')
	);
};
