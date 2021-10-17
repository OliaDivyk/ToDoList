<?php
session_start();
include './db_data.php';

$mail = $_POST['mail'];
$password = $_POST['password'];

$password = md5($password);

$check_user = mysqli_query($conn, "SELECT * FROM `users` WHERE `mail` = '$mail' AND `password` = '$password'");

if (mysqli_num_rows($check_user) > 0){

    $user = mysqli_fetch_assoc($check_user);
    
    $_SESSION['user'] = [
        "id" => $user['id'],
        "username" => $user['username'],
        "mail" => $user['mail'],
        "password" => $user['password'],
        "tasks_id" => $user['tasks_id']
    ];
}