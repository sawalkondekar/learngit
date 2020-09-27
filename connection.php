<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "task";   //meet

$conn = mysqli_connect($servername,$username,$password,$dbname);

if ($conn) {
	echo "";  //Connection OK
}
else
{
	
	die("Connection Failed because ".mysqli_connect_error());
}



?>