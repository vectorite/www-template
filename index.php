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
	<div class="wvm_site">
		<div class="wvm_site_dash">
			<div class="wvm_dash_content">
				<div class="wvm_logo"></div>
				<div class="wvm_tagline">
					<p>workVM, an open-source software and IT support company with a passion for all things Linux</p>
					<p>Check out our pilot software offering, the Intengine, a CentOS/RHEL management platform with a focus on automated configuration, virtualization and multi-node environments</p>
				</div>
			</div>
			<jdoc:include type="modules" name="dash" /> 
		</div>
		<div class="wvm_site_grid">
			<jdoc:include type="modules" name="grid" /> 
		</div>
		<div class="wvm_site_content">
			<jdoc:include type="component" />
		</div>
	</div>
	<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/jquery-2.0.3-min.js"></script>
	<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/jq3dtxt-1.0.js"></script>
	<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/jq-fittxt-1.0.js"></script>
	<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/jqisotext-1.0-min.js"></script>
	<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/template.js"></script>
</body>
</html>