<?php
$host = 'localhost';
$database = 'shop';
<<<<<<< HEAD
$user = 'admin';
$password = '1234';
=======
$user = 'shop';
$password = '12345678';
>>>>>>> 867f0f4bea22a8a67dadcf55f7848831b36c658f

$dbc = new mysqli($host, $user, $password, $database);

if ($dbc->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $dbc->connect_errno . ") " . $dbc->connect_error;
}

mysqli_set_charset($dbc, "utf-8");
?>