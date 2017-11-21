<?php
	$dbhost = "localhost";
	$dbname = "supplier";
	$dbuser = "root";
	$dbpassword = "";
	$dbconn = mysqli_connect ($dbhost, $dbuser, $dbpassword) or die (mysqli_error ()); 
	mysqli_select_db ($dbconn,$dbname);
?>

