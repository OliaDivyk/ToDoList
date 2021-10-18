<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
    <title>To Do List</title>
</head>
<body>
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid mx-5">
    <div>
        <a class="navbar-brand" href="index.php">
        <img src="./img/to-do-list.png" height="24" class="d-inline-block align-text-top">
        ToDoList=)
        </a>
    </div>
    <div>
      <ul class="navbar-nav" style="flex-direction: row;">
      <?php if (isset($_SESSION['user'])) { ?>
        <li class="nav-item mx-2">
            <a class="nav-link" href="/dashboard.php">Кабінет</a>
        </li>
        <li class="nav-item mx-2">
            <a class="nav-link" id="signout" href="#">Вийти</a>
        </li>
      <?php } else { ?>
        <li class="nav-item mx-2">
          <a class="nav-link" href="SignIn.php">Sing in</a>
        </li> 
        <li class="nav-item mx-2">
          <a class="nav-link" href="Register.php">Register</a>
        </li>
      <?php } ?>
    </div>
  </div>
</nav>
