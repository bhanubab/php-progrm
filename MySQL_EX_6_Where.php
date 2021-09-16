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
  
//SQL query to showing required record.

$sql = "SELECT id, stname FROM students WHERE mobile='1122334456'";

$result = mysqli_query($conn, $sql);
  
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "<b>Id:</b> " . $row["id"]. ", <b>Name:</b> " . $row["stname"].  "<br>";
    }
    } else {
    echo "no record found";
     }
  
  mysqli_close($conn);
  ?>