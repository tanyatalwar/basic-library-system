<?php 
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
//connection with db establish
$sql = "SELECT * from bookrecord";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) 
    {
    	$bookname = $row["bookname"];
    	$publicationyear = $row["publicationyear"];
    	$writer = $row["writer"];

    	echo "<table>";

     echo "<tr>";
     echo "<th> bookname </th>";
     echo "<th>publication year</th>";
     echo "<th> writer </th>";
     echo "</tr>";

     echo "<tr>";
     echo "<td>".$bookname."</td>";
     echo "<td>".$publicationyear."</td>";
     echo "<td>".$writer."</td>";
     echo "</tr>";

    }
}
else
 {
    echo "0 results";
 }
$conn->close();
?>