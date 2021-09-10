<?php
include './db_data.php';
$conn = new mysqli($localhost, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$taskId = $_POST['taskId'];
$sql = "DELETE FROM `tasks` WHERE `tasks`.`id` = '$taskId'";

if (mysqli_query($conn, $sql)) {
    echo "Success deleted";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>