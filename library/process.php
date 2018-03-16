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
echo "connection established";
$username = $_POST['user'];
$password = $_POST['pass'];
// passing of data from one page to other page for checking echo the value
// $sql = "INSERT INTO users ($username,$password)";
$sql = "INSERT INTO users (username, password)
VALUES ('$username', '$password')";
if(!mysqli_query($conn,$sql))
{
	echo "please retry not registered";
}
else
{
	echo "inserted";
}	



?>