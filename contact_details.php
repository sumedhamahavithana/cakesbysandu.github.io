<?php
$servername="localhost";
$username="root";
$password="";
$database_name="database1";

$conn=mysqli_connect($servername,$username,$password,$database_name);

if($conn)
{
	die("Connection Failed:" . mysqli_connect_error());
}
if(isset($_POST['save']))
{
	$Your_Name=$_POST['Your_Name'];
	$Your_Email=$_POST['Your_Email'];
	$Subject=$_POST['Subject'];
	$Message=$_POST['Message'];
	
	$sql_query="INSERT INTO contactdetails(Your_Name,Your_Email,Subject,Message)
	VALUES ('$Your_Name','$Your_Email','$Subject','$Message')";
	if(mysqli_query($conn,$sql_query))
	{
		echo "New Details Entry inserted successfully !";
	}
	else{
		echo "Error: " . $sql . "" . mysqli_error($conn);
	}
	mysqli_close($conn);
}
?>