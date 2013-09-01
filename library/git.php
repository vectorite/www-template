<?php
	
// GitHub URL and source branch
function github_url()	{ return 'https://raw.github.com/workvm/intengine/'; }
function branch() 		{ return 'dev'; }
	
// Strip header from source code
function strip_header($contents) {
	
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
	return $contents;
	
}

// Get the source code from GitHub
function git_code($path) {
	
	// Get the file contents
	$contents = file(github_url() . branch() . "/" . $path);
	
	// Strip the header
	$contents = strip_header($contents);
	
	// Return the file contents
	foreach ($contents as $line) {
		echo $line;
	}
	
}

// Load framework
function git_framework($path) {
	
	// Get the framework file / library / language library
	$file_framework = file(github_url() . branch() . "/framework/" . $path . ".fw");
	$file_library = file(github_url() . branch() . "/library/framework/" . $path . ".lib");
	$file_language = file(github_url() . branch() . "/language/en/framework/" . $path . ".lang");
	
	// Get the HTML blocks for the framework / library / language
	$fw_content = implode(strip_header($file_framework));
	$lib_content = implode(strip_header($file_library));
	$lang_content = implode(strip_header($file_language));
	
	// Define the HTML block
	$framework_html = '<div class="wvm_gitfw">';
		$framework_html .= '<div class="wvm_gitfw_files">';
			$framework_html .= '<div class="wvm_gitfw_files_nav">';
				$framework_html .= '<div class="wvm_gitfw_files_nav_item" id="fw_nav">Framework</div>';
				$framework_html .= '<div class="wvm_gitfw_files_nav_item" id="lib_nav">Library</div>';
				$framework_html .= '<div class="wvm_gitfw_files_nav_item" id="lang_nav">Language</div>';
			$framework_html .= '</div>';
			$framework_html .= '<div class="wvm_gitfw_files_content">';
				$framework_html .= '<div class="wvm_gitfw_files_content_source" id="fw_content"><pre class="brush:bash">' . $fw_content . '</pre></div>';
				$framework_html .= '<div class="wvm_gitfw_files_content_source" id="lib_content" style="display:none;"><pre class="brush:bash">' . $lib_content . '</pre></div>';
				$framework_html .= '<div class="wvm_gitfw_files_content_source" id="lang_content" style="display:none;"><pre class="brush:bash">' . $lang_content . '</pre></div>';
			$framework_html .= '</div>';
		$framework_html .= '</div>';
	$framework_html .= '</div>';
	
	// Print the framework HTML
	echo $framework_html;
	
}

?>