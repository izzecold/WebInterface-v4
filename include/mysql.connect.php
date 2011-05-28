<?php

	$link = mysql_connect(DB_HOST,DB_USER,DB_PASS);
	$data = mysql_select_db(DB_NAME);

if(!$link) {
	die("Error: ".mysql_error());
}

if(!$data) {
	die("Error: ".mysql_error());
}

?>