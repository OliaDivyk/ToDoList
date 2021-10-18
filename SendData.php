<?php
include './db_data.php';
session_start();

$user_id = $_SESSION['user']['id'];
$Title = $_POST['nameTitle'];
$Description = $_POST['description'];
$CategoryId = $_POST['category'];

$sql = "INSERT INTO tasks (id, user_id, Title, Description, Category_id) VALUES (Null, '$user_id', '$Title', '$Description', '$CategoryId')";

if (mysqli_query($conn, $sql)) {
    echo "";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>