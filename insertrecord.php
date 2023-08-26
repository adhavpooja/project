<?php
$hostname="127.0.0.1";
$username="root";
$password="";
$db_name="test";
$connection=mysqli_connect($hostname,$username,$password,$db_name)or die('could not connect');
if ($connection->connect_error) 
{
	die("connection failed:".$connection->connect_error);
}
$sql="insert into people values(1,'om','jay')";
if (mysqli_query($connection,$sql)) 
{
	echo "Record inserted successfully";
}
else
{
	echo "Error: Could not able to execute $sql".mysqli_error($connection);
}
$connection->close();
?>