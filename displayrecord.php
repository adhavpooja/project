<?php
$hostname="127.0.0.1";
$username="root";
$password="";
$db_name="test";

$conn=new mysqli($hostname,$username,$password)or die('could not connect');
if ($conn) 
{
	echo "connection successful established...";
}
$conn->select_db("$db_name");
$sql="select * from people";
echo "<br>";
if ($res=mysqli_query($conn,$sql)) 
{
	if (mysqli_num_rows($res)>0) 
	{
		while ($row=mysqli_fetch_array($res)) 
		{
			echo $row['id'];
			echo $row['firstname'];
			echo $row['lastname'];
			echo "<br>";
		}
	}
	else
	{
		echo "No matching records are found.";
	}
}
?>