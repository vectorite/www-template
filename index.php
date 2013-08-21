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
	<div class="wvm_dash">
		<div class="wvm_dash_content">
			<div class="wvm_logo"></div>
			<div class="wvm_nav">
				<jdoc:include type="modules" name="nav" />
			</div>
		</div>
		<jdoc:include type="modules" name="dash" /> 
	</div>
	<div class="wvm_site">
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
					echo "<div style=\"display:all;\"><div class=\"wvm_site_content\"><jdoc:include type=\"component\" /></div><div class=\"wvm_subnav\"><jdoc:include type=\"modules\" name=\"subnav\" /></div></div>";
				}
			?>
	</div>
	<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/jquery-2.0.3-min.js"></script>
	<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/jq3dtxt-1.0.js"></script>
	<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/jq-fittxt-1.0.js"></script>
	<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/jqisotext-1.0-min.js"></script>
	<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/template.js"></script>
</body>
</html>