<?php

// Fetch file code from GitHub
class git
{
	
	// Define the source GitHub branch
	private $branch = 'dev';

	// Get the raw contents of the GitHub file
	public function code($path)
	{
		
		// Get the raw file contents and return them
		$contents = file_get_contents("https://raw.github.com/workvm/intengine/$branch/$path");
		echo $contents;
	}
	
}

?>