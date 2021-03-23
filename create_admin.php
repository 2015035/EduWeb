<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_connect";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO users (fname, username, email, password,usertype)
VALUES ('Root 1', 'Admin', 'admin1@eduweb.com', 'eduweb01', 'admin')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<?php

$sql = "INSERT INTO users (fname, username, email, password,usertype)
VALUES ('Root 2', 'Admin2', 'admin2@eduweb.com', 'eduweb02', 'admin')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>