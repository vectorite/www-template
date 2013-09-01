<?php

class git
{
	
	// GitHub URL and source branch
	public $github_url;
	public $branch;
	
	public function __construct() {
		$this->github_url	= 'https://raw.github.com/workvm/intengine/';
		$this->branch 		= 'dev';
	}
	
	// Strip header from source code
	public function strip_header($contents) {
		
		$delete_lines = false;
		foreach ($contents as $line_num => $line) {
			if (preg_match("/^#.*Info\\\/", $line)) {
				unset($contents[$line_num]);
				$delete_lines = true;
			}
			if (preg_match("/^#.*Info\//", $line)) {
				unset($contents[$line_num]);
				unset($contents[++$line_num]);
				$delete_lines = false;
				break;
			}
			if ($delete_lines === true) {
				unset($contents[$line_num]);
			}
		}
		
		// Return the file contents
		foreach ($contents as $line) {
			echo $line;
		}
		
	}
	
	// Get the source code from GitHub
	public function source_code($path) {
		
		// Get the file contents
		$contents = file($this->github_url . $this->branch . "/" . $path);
		
		// Strip the header
		$contents = $this->strip_header($contents);
		
		// Return the file contents
		foreach ($contents as $line) {
			echo $line;
		}
		
	}
	
	// Load framework
	public function framework($path) {
		
		// Get the framework file / library / language library
		$file_framework = file($this->github_url . $this->branch . "/framework/" . $path . ".fw");
		$file_library = file($this->github_url . $this->branch . "/library/framework/" . $path . ".lang");
		$file_language = file($this->github_url . $this->branch . "/language/en/framework/" . $path . ".lang");
		
		// Define the HTML block
		$framework_html = '<div class="wvm_gitfw">';
			$framework_html .= '<div class="wvm_gitfw_files">';
				$framework_html .= '<div class="wvm_gitfw_files_nav">';
					$framework_html .= '<div class="wvm_gitfw_files_nav_item" id="fw_nav">Framework</div>';
					$framework_html .= '<div class="wvm_gitfw_files_nav_item" id="lib_nav">Library</div>';
					$framework_html .= '<div class="wvm_gitfw_files_nav_item" id="lang_nav">Language</div>';
				$framework_html .= '</div>';
			$framework_html .= '</div>';
			$framework_html .= '<div class="wvm_gitfw_files_content">';
				$framework_html .= '<div class="wvm_gitfw_files_content_source" id="fw_content"><pre class="brush:bash">' . $this->strip_header($file_framework) .'</pre></div>';
				$framework_html .= '<div class="wvm_gitfw_files_content_source" id="lib_content"><pre class="brush:bash">' . $this->strip_header($file_library) .'</pre></div>';
				$framework_html .= '<div class="wvm_gitfw_files_content_source" id="lang_content"><pre class="brush:bash">' . $this->strip_header($file_language) .'</pre></div>';
			$framework_html .= '</div>';
		$framework_html .= '</div>';
		
		// Print the framework HTML
		echo $framework_html;
		
	}
	
}

?>