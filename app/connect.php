<?php
$host = 'localhost';
$database = 'shop';
$user = 'shop';
$password = '12345678';

$dbc = new mysqli($host, $user, $password, $database);

if ($dbc->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $dbc->connect_errno . ") " . $dbc->connect_error;
}

mysqli_set_charset($dbc, "utf-8");
?>