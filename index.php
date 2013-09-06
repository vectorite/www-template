<?php 
require_once('library/git.php');
?>
<!DOCTYPE html>
<html>
<head>
	<jdoc:include type="head" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template.css" type="text/css" />
	<link rel="shortcut icon" href="/favicon.ico" type="image/png">
	<link rel="shortcut icon" type="image/ico" href="http://www.workvm.com/favicon.ico" />
</head>
<body>
	<?php
		$app = JFactory::getApplication();
		$menu = $app->getMenu();
		if ($menu->getActive() == $menu->getDefault()) {
			echo '<div class="wvm_dash" style="display:none;">';
		} else {
			echo '<div class="wvm_dash" style="display:all;">';
		}
	?>
		<div class="wvm_dash_content">
			<div class="wvm_logo">
				<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/workvm-logo.png" />
			</div>
			<div class="wvm_nav">';
				<jdoc:include type="modules" name="nav" />
			</div>
			<div class="wvm_breadcrumb">
				<jdoc:include type="modules" name="breadcrumb" />
			</div>
		</div>
		<jdoc:include type="modules" name="dash" /> 
	</div>
	
	<?php
		$app = JFactory::getApplication();
		$menu = $app->getMenu();
		if ($menu->getActive() == $menu->getDefault()) {
			echo '<div class="wvm_site_home">';
		} else {
			echo '<div class="wvm_site_global">';
		}
	?>
		<div class="wvm_site_grid">
			<jdoc:include type="modules" name="grid" /> 
		</div>
		<div class="wvm_site_intro">
			<jdoc:include type="modules" name="intro" />
		</div>
			<?php
				$app = JFactory::getApplication();
				$menu = $app->getMenu();
				if ($menu->getActive() == $menu->getDefault()) {
					echo "<div style=\"display:none;\"><div class=\"wvm_site_content\"><jdoc:include type=\"component\" /></div><div class=\"wvm_subnav\"><jdoc:include type=\"modules\" name=\"subnav\" /></div></div>";
				} else {
					if ($this->countModules( 'subnav' )) {
						echo "<div style=\"display:all;\">";
						echo "<div class=\"wvm_site_content\" style=\"width:80%;\">";
						echo "<jdoc:include type=\"component\" /></div>";
						echo "<div class=\"wvm_subnav\" style=\"width:20%;\">";
						echo "<jdoc:include type=\"modules\" name=\"subnav\" /></div>";
						echo "</div>";
                    } else {
						echo "<div style=\"display:all;\">";
						echo "<div class=\"wvm_site_content\" style=\"width:100%;\">";
						echo "<jdoc:include type=\"component\" /></div>";
						echo "<div class=\"wvm_subnav\" style=\"display:none;\">";
						echo "<jdoc:include type=\"modules\" name=\"subnav\" /></div>";
						echo "</div>";
					}
				}
			?>
	</div>
	<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/jquery-2.0.3-min.js"></script>
	<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/jq3dtxt-1.0.js"></script>
	<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/jqfittxt-1.0.js"></script>
	<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/template.js"></script>
</body>
</html>