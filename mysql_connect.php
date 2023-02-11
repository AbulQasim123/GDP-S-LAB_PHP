<?php  
	$mysql_host='localhost';
	$mysql_user= 'root';
	$mysql_pass= '';
	$mysql_database= 'gdp-lab';

	$conn= mysqli_connect($mysql_host, $mysql_user, $mysql_pass,$mysql_database) or die('Connection failed');
?>