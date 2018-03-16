<?php
//including the db file
//getting information from the url
// we will get value passed from login.php file
// for now i am selecting value from name
$servername = "localhost";
$username = "root";
$password = "";
$database = "library";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


mysqli_select_db($con,"library");
// echo "connection established";
$username = $_POST['user'];
$password = $_POST['pass'];

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result= $conn->query($sql);

if (!$row = mysqli_fetch_assoc($result)) 
	// this is when we dont get resource from the database
{
	echo "your username or password is incorrect";
	echo "<script type='text/javascript'>alert('incorrect username and password')</script>";

	// header("Location: login.php");
	
}
else
{
	echo "you are logged in";
	header("Location: profile.php");
}


?>