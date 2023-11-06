<?php
$servername = "localhost";   
$username = "root";
$password = ""; 
$database = "riya"; 
$port = 3306;

$conn = new mysqli($servername, $username, $password, $database,$port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully<br>";

$sql = "SELECT * FROM employee";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Name: " . $row["name"] . "<br>";
    }
} else {
    echo "0 results";
}


$conn->close();
?>





http://localhost/riya/emp.php 
httdocs 