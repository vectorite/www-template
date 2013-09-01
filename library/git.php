<?php

// Fetch file code from GitHub
function git_code($path) {
	
	// Define the source GitHub branch
	$branch = 'dev';
	
	// Get the file contents
	$contents = file("https://raw.github.com/workvm/intengine/$branch/$path");
	
	// Return the file contents
	foreach ($contents as $line) {
		echo $line;
	}
	
}

?>