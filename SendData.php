<?php
include './db_data.php';
$conn = new mysqli($localhost, $username, $password, $database);

if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
$Title = $_POST['nameTitle'];
$Description = $_POST['description'];
$CategoryId = $_POST['category'];

$sql = "INSERT INTO tasks (id, Title, Description, Category_id) VALUES (Null, '$Title', '$Description', '$CategoryId')";

if (mysqli_query($conn, $sql)) {
    echo "";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>