<?php

// Fetch file code from GitHub
function git_code($path) {
	
	// Define the source GitHub branch
	$branch = 'dev';
	
	// Get the raw file contents and return them
	$contents = file_get_contents("https://raw.github.com/workvm/intengine/$branch/$path");
	echo $contents;
	
}

?>