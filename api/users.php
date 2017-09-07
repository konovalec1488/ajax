<?php

$query = "SELECT login from users";
$mysqli = new mysqli('localhost', 'root', '', 'users-13');
if ($result = $mysqli->query($query)) {
    $users = $result->fetch_all();
    $logins = array_column($users, 0);
    $json_logins = json_encode($logins); //преобразуем в джейсон
    header("Content-type: application/json");
    echo $json_logins;
} else {
    echo 'какие то проблемы';
}