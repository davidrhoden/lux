<!DOCTYPE HTML>
<html>
<head>
<title>lux salon blends ::  new orleans :: day spa, manicures, pedicures, facials, waxing and massage</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link type="text/css" href="css/lux.css" rel="stylesheet" />
<link type="text/css" href="css/smoothness/jquery-ui-1.7.1.custom.css" rel="stylesheet" />	
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.7.1.custom.min.js"></script>
<script type="text/javascript">
	$(function(){

		// Tabs
		$('#tabs').tabs();


		//hover states on the static widgets
		$('#dialog_link, ul#icons li').hover(
			function() { $(this).addClass('ui-state-hover'); }, 
			function() { $(this).removeClass('ui-state-hover'); }
		);
		
	});
</script>
</head>

<body class="bluebody">
<div class="shadowpage">
<div class="brownrule">
<div class="bluerule">
<div class="goldenrule">
<div class="prettygreen">
<div id="logo"><a href="index.php"><img src="images/lux_logo_small.gif" width="172" height="150"></a></div>
<div id="mainmenu_container"><?php include 'mainmenu.php'; ?>
</div>
<div class="subheader">
</div>
<div class="index_content">
<iframe frameborder="0" style="border:0; width: 600px; float:left; height:600px; padding-top:3px;" src="https://booking.salonbizcloud.com/app/home.html?wbid=2EA415BF5E0142499985BABC62F1A94E"></iframe>
<div class="clear"></div>
<?php // include 'maillist.php'; ?>
</div>
</div>
</div>
<div class="contactinfo">
<?php include 'contactinfo.php'; ?>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="footer"></div>
</body>
</html>

