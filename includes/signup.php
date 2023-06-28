<?php

    require_once 'connect.php';

    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        echo "<h1>Неверно введена электронная почта</h1>";
        echo "<a href='../register.php'>Исправлюсь</a>";
    } else {
        $password = md5($password);
        mysqli_query($connect, "INSERT INTO `users` (`id`, `email`, `password`) VALUES (NULL, '$email', '$password')");
        echo "<h1>Регистрация завершена. </h1>";
        echo "<a href='../index.php'>Авторизация</a>";
    }