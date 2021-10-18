<?php
include './db_data.php';

echo $name = $_POST['name'];
echo $mail = $_POST['mail'];
echo $password = $_POST['password'];

$password = md5($password);

$sql = "INSERT INTO users (id, username, mail, password) VALUES (Null, '$name', '$mail', '$password')";

if (mysqli_query($conn, $sql)) {
    echo "";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>