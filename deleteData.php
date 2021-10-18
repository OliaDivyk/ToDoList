<?php
include './db_data.php';

$taskId = $_POST['taskId'];
$sql = "DELETE FROM `tasks` WHERE `tasks`.`id` = '$taskId'";

if (mysqli_query($conn, $sql)) {
    echo "Success deleted";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>