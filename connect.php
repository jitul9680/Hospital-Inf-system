<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbms";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
	echo "";
}
else
{
	die ("connection Failed".mysqli_connect_error());
}

?>