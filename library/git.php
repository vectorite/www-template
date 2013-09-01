<?php

// Fetch file code from GitHub
function git_code($path) {
	
	// Define the source GitHub branch
	$branch = 'dev';
	
	// Get the file contents and strip the header
	$contents = file_get_contents("https://raw.github.com/workvm/intengine/$branch/$path");
	$contents = preg_replace('/^#\s\[Info\\\\]/s', '', $contents);
	
	// Return the file contents
	echo $contents;
	
}

?>