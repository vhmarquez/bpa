<?php

ob_start();
session_start();

if(($_POST[username] == "bpa") && ($_POST[password] == "bpa_admin_only")){
	$_SESSION['admin'] = "yes";
	header("Location: index2.php?page=user");
} else {
	die("Wrong username and password!");
}

?>