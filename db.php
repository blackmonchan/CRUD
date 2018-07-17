<?php

$databaseHost = 'localhost';
$databaseName = 'my_db';
$databaseUsername = 'root';
$databasePassword = '';

 
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

if(!$mysqli)
{
	echo"Not connected";
}
else
{
	echo "Connected";
}
?>