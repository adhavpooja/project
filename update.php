<?php
$hostname="127.0.0.1";
$username="root";
$password="";
$db_name="test";
$connection=mysqli_connect($hostname,$username,$password,$db_name)or die('could not connect');
if (!$connection) 
{
	echo "Error:Unable to connect to MySql.<br>";
	echo "<br>Debugging errno:".mysqli_connect_errno();
	echo "<br>Debugging error:".mysqli_connect_error();
	exit;
}
$query="update people set firstname='santosh' where id=1";
$result=$connection->query($query);
echo "The total number of rows affected"."$result";
?>