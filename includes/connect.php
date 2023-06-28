<?php

    $connect = mysqli_connect('sever', 'root', '', 'website');

    if (!$connect) {
        die('Error connect to DataBase');
    }
?>
