<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "School";

// I am Creating a connection here with MySQL.
$conn = mysqli_connect($servername, $username, $password, $dbname);

// I am Checking connection here. 
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  
// SQL query to inserting data in students table.

$sql = "INSERT INTO students (stname, email, mobile)
VALUES ('Mohan', 'mohan@example.com', '1122334456')";

if (mysqli_query($conn, $sql)) {
  echo "New record inserted successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>