<?php

session_start();

error_reporting("E_ALL");

	include("include/config.php");
	include("include/mysql.connect.php");
	include("include/functions.php");
	
	/*
	if(!isset($_COOKIE["v4_user|".$_SERVER['REMOTE_ADDR']])) {
		setcookie("v4_user|".$_SERVER['REMOTE_ADDR'],sha1("IzezCold"),(time() + 600),"","v4.luckshot-gamers.de",true);
	}
	*/

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<style type="text/css">
	#login_section {
		width: 252px;
		height: 152px;
		background: url(images/login/login_form_bg_v2.png) no-repeat;
	}
	
	body {
		background: #FFF;
		color: #000;
		font-size: 10px;
		font-family: Arial;
	}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>WebinterFace v4 - 2011 © by IzzeCold http://luckshot-gamers.de</title>

<script type="text/javascript" src="js/jquery-1.6.1.min.js"></script>
</head>

<body>
<?php
	if(!isset($_SESSION['user_name'])) {
		?>
<div id="login_section">
	<? include("templates/core/login_form.php"); ?>
</div>
		<?
	} else {
		if(isset($_GET['site']) && $_GET['site'] != "") {
			$site = $_GET['site'];
			if(is_file("templates/".$site.".php")) {
				include("templates/".$site.".php");
			} else {
				echo "No template '$site' found!";
			}
		} else {
			$site = DEFAULT_SITE;
			if(is_file("templates/".$site.".php")) {
				include("templates/".$site.".php");
			} else {
				echo "No template '$site' found!";
			}
		}
	}
?>
<br>
<br>
<br>
<div style="position: absolute; bottom: 0px; left: 0px;">
<script type="text/javascript"><!--
google_ad_client = "ca-pub-2610620378910913";
/* LuckShot */
google_ad_slot = "9201704487";
google_ad_width = 468;
google_ad_height = 60;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</div>
</body>
</html>