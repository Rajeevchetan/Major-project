<?php
$servername = "localhost";
$username = "root";
$password = "123";
$dbname = "test_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT ename, eadd, esal,eaddress FROM emp";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "User Name: " . $row["ename"]. " User PassWord: " . $row["eadd"]. " User Mobile No.: " . $row["esal"]. " User Address: " . $row["eaddress"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>