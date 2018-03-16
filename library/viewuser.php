
   
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

$sql = "SELECT * from studentrecord";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
        $studentname = $row["studentname"];
        $bookname  = $row["bookname"];
        $year  = $row["year"];
        $section  = $row["section"];
        $rollnumber  = $row["rollnumber"];
        $issuedate = $row["issuedate"];
        $returndate = $row["returndate"];
     echo "<table>";

     echo "<tr>";
     echo "<th> studentname </th>";
     echo "<th> bookname </th>";
     echo "<th> year </th>";
     echo "<th> section </th>";
     echo "<th> rollnumber </th>";
     echo "<th> issuedate </th>";
     echo "<th> returndate </th>";
     echo "</tr>";

     echo "<tr>";
     echo "<td>".$studentname."</td>";
     echo "<td>".$bookname."</td>";
     echo "<td>".$year."</td>";
     echo "<td>".$section."</td>";
     echo "<td>".$rollnumber."</td>";
     echo "<td>".$issuedate."</td>";
     echo "<td>".$returndate."</td>";
     echo "</tr>";
     echo "</table>";
    }
} 
else
 {
    echo "0 results";
 }
$conn->close();
   ?>
