<?php
include './db_data.php';

$user_id = $_SESSION['user']['id'];

$getTasks = "SELECT * FROM tasks WHERE user_id='$user_id'"; 

$getCategories = "SELECT * FROM categories"; 

$result = $conn->query($getTasks);
$categories = $conn->query($getCategories);

mysqli_close($conn);
?>