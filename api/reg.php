<?php

//echo 'ok';
$login = filter_input(INPUT_POST, 'login');
$pass = filter_input(INPUT_POST, 'pass');
$pass2 = filter_input(INPUT_POST, 'pass2');
if ($pass === $pass2) {
    $qwery = "INSERT users (login,pass) values ('" . $login . "', '" . password_hash($pass, PASSWORD_DEFAULT) . "')";
    $mysqli = new mysqli('localhost', 'root', '', 'users-13');
    $qwery2 = "SELECT login from users  WHERE login='" . $login . "'";
    if ($result = $mysqli->query($qwery2)) {
        if ($result->fetch_assoc()) {
            echo 'логин занят';
        } else {
            if ($mysqli->query($qwery)) {
                echo 'ок';
            } else {
                echo 'не выполнено';
            }
        }
    } else {
        echo 'какие то проблемы';
    }
}

