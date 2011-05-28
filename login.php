<?php
	include("include/config.php");
	include("include/mysql.connect.php");
	include("include/functions.php");
	
	$rslt = mysql_query("SELECT * FROM ".TBL_PREFIX."user WHERE user_name = '".mysql_real_escape_string($_POST['user_name'])."' AND pass_hash = '".mysql_real_escape_string(sha_password($_POST['user_name'],$_POST['user_pass']))."'");
	if(mysql_num_rows($rslt) == 1) {
		
		
		$ds = mysql_fetch_array($rslt);
		$id = $ds['id'];
		$user = $ds['user_name'];
		$email = $ds['email_addr'];
		$type = $ds['type'];
		
		$update_login_time = mysql_query("
			UPDATE ".TBL_PREFIX."user 
			SET 
					last_login = '".time()."',
					login_time = '".time()."'
			WHERE 
					user_name = '".mysql_real_escape_string($_POST['user_name'])."' 
			AND
					pass_hash = '".mysql_real_escape_string(sha_password($_POST['user_name'],$_POST['user_pass']))."'
		");
		
		$update_login_ip = mysql_query("
			UPDATE ".TBL_PREFIX."user 
			SET 
					last_ip = '".$_SERVER['REMOTE_ADDR']."' 
			WHERE 
					user_name = '".mysql_real_escape_string($_POST['user_name'])."' 
			AND
					pass_hash = '".mysql_real_escape_string(sha_password($_POST['user_name'],$_POST['user_pass']))."'
		");
		
		$update_login_action = mysql_query("
			UPDATE ".TBL_PREFIX."user 
			SET 
					last_action_time = '".$_SERVER['REMOTE_ADDR']."',
					last_action_desc = 'Login from ".$_SERVER['REMOTE_ADDR']."'
			WHERE 
					user_name = '".mysql_real_escape_string($_POST['user_name'])."' 
			AND
					pass_hash = '".mysql_real_escape_string(sha_password($_POST['user_name'],$_POST['user_pass']))."'
		");
		
		session_start();
		$_SESSION['user_name'] = $user;
		$_SESSION['user_id'] = $id;
		$_SESSION['user_mail'] = $email;
		$_SESSION['user_type'] = $type;
		
		header("Location: index.php");
	} else {
		?>
        	<table border="0" cellpadding="0" cellspacing="0" width="100%" style="height: 500px;" align="center">
            	<tr>
                	<td align="center" valign="middle">
                    	<div style="padding: 10px; background-color: #CCC; color: #A00; margin: 10px; width: 60%">
                        	<strong>Fehler beim Login!</strong><br>
							Du wirst in 3 Sekunden auf die Hauptseite weitergeleitet und kannst dort erneut versuchen dich einzuloggen.
                        </div>
                        <meta http-equiv="refresh" content="3;url=index.php">
        <?
	}
?>