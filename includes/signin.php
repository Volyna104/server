<?php
    session_start();

    require_once 'connect.php';

    $email = $_POST['email'];
    $password = $_POST['password'];

    $password = md5($password);
    $check_users = mysqli_query($connect, "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'");
    if (mysqli_num_rows($check_users) > 0)
    {
        echo "<h1>Успешная авторизация.</h1>";
        echo "Добро пожаловать, " . $email;
        echo "<a href='../page.php'> Продолжить</a>";
    } else {
        echo "<h1>Не найдено пользователя с указанными данными</h1>";
        echo "<a href='../index.php'>Исправлюсь</a>";
    }


