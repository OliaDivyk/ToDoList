<?php
$localhost = "localhost";
$username = "root";
$password = "";
$database = "todolist";

$conn = new mysqli($localhost, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>