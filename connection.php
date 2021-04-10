<?php

//variables - $var echo - display



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db2";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if($conn)
{
	echo "Connection Established";
}
else{
	die("Connection Failed".mysqli_connect_error());
	}






?>