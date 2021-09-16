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

// SQL query to selecting all record from table  
$sql = "SELECT id, stname, email, mobile FROM students";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    echo "<b>Id:</b> " . $row["id"]. ", <b>Name:</b> " . $row["stname"]. ", <b>Email:</b> " . $row["email"].  ", <b>Mobile:</b> " . $row["mobile"]. "<br>";
  }
} else {
  echo "no record found";
}

mysqli_close($conn);
?>