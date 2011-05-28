<?php 

session_start (); 
unset($_SESSION['user_id']);
unset($_SESSION['user_name']);
unset($_SESSION['user_email']);
unset($_SESSION['user_type']);

session_unset (); 
session_destroy (); 

header ("Location: index.php"); 

?> 