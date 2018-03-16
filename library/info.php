<?php 
$servername = "localhost";
$username = "root";
$password = "";
$database = "library";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
mysqli_select_db($con,"library");
//taking from profile.php and alloting in variable
$studentname = $_POST['studentname'];
$year = $_POST['year'];
$section = $_POST['section'];
$rollno = $_POST['rollno'];
$bookname = $_POST['bookname'];
$issuedate = $_POST['issuedate'];
$returndate = $_POST['returndate'];

$sql = "INSERT INTO studentrecord (studentname, bookname, year, section, rollnumber, issuedate, returndate) VALUES ('$studentname','$bookname', '$year', '$section', '$rollno','$issuedate', '$returndate')";

if(!mysqli_query($conn,$sql))
{
	echo "please retry not registered";
}
else
{
	echo "inserted";
}	
?>