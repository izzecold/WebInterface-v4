<?php

function getUserByID($id) {
	$rslt = mysql_query("SELECT * FROM ".TBL_PREFIX."user WHERE id = '".$id."'");
	if(mysql_num_rows($rslt) == 1) {
		$ds = mysql_fetch_array($rslt);
		$name = $ds['user_name'];
		return $name;
	} else {
		return false;
	}
}

function check_for_symbols($string)
{
    $len=strlen($string);
    $allowed_chars="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    for($i=0;$i<$len;$i++)if(!strstr($allowed_chars,$string[$i]))
        return TRUE;
    return FALSE;
}

function sha_password($user,$pass)
{
    $user = strtoupper($user);
    $pass = strtoupper($pass);
    return SHA1($user.':'.$pass);
}

?>