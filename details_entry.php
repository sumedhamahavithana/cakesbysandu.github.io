
<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="database123";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['save']))
{	
	 $your_name = $_POST['your_name'];
	 $your_email = $_POST['your_email'];
	 $subject = $_POST['subject'];
	 $message = $_POST['message'];

	 $sql_query = "INSERT INTO entry_details (your_name,your_email,subject,message)
	 VALUES ('$your_name','$your_email','$subject','$message')";

	 if (mysqli_query($conn, $sql_query)) 
	 {
		echo "Your Message has been sent successfully !";
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>