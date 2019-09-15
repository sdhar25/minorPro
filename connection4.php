<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mcadb";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
	echo "";
}
else
{
	die("connection failed because ".mysqli_connect_error());
}


?>