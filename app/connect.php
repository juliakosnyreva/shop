<?php
$host = 'localhost';
$database = 'shop';
$user = 'admin';
$password = '1234';

$mysqli = new mysqli($host, $user, $password, $database);

if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

mysqli_set_charset($mysqli, "utf-8");
?>