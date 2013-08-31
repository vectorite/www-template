<?php

// Fetch file code from GitHub
function git_code($path) {
	
	// Define the source GitHub branch
	$branch = 'dev';
	
	// Get the file contents
	$contents = file("https://raw.github.com/workvm/intengine/$branch/$path");
	
	// Strip out the file header
	$delete_lines = false;
	foreach ($contents as $line_num => $line) {
		if (preg_match("/Info\/i", $line)) {
			unset($contents[$line_num]);
			$delete_lines = true;
		}
		if ($delete_lines = true) {
			unset($contents[$line_num]);
		}
		if (preg_match("/Info\//i", $line)) {
			unset($contents[$line_num]);
			break;
		}
	}
	
	// Return the file contents
	foreach ($contents as $line) {
		echo $line;
	}
	
}

?>