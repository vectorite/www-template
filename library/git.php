<?php

// Fetch file code from GitHub
function git_code($path) {
	
	// Define the source GitHub branch
	$branch = 'dev';
	
	// Get the raw file contents
	$contents_raw = file_get_contents("https://raw.github.com/workvm/intengine/$branch/$path");
	
	// Strip out the file header and return the contents
	$contents = preg_replace('/^*Info\\\.*Info\/*$/s', '', $contents_raw);
	echo $contents;
	
}

?>