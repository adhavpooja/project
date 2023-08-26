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
$sql="create table people(id int(2) primary key,firstname varchar(30),lastname varchar(30))";
if ($connection->query($sql)===TRUE) 
{
	echo "Table created successfully";
}
else
{
	echo "Error creating table:".$connection->error;
}
$connection->close();
?>