<?php
include './db_data.php';
$conn = new mysqli($localhost, $username, $password, $database);

if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}

$getTasks = "SELECT * FROM tasks"; 
$getCategories = "SELECT * FROM categories"; 

$result = $conn->query($getTasks);
$categories = $conn->query($getCategories);

mysqli_close($conn);
?>