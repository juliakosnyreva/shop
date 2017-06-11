<?php
define('HOST', 'localhost');
define('USER', 'admin');
define('PASSWORD', '123'); 
define('NAME_BD', 'shop');
$connect = mysql_connect(HOST, USER, PASSWORD)or die("Невозможно установить соединение c базой данных".mysql_error( ));
mysql_select_db(NAME_BD, $connect) or die ("Ошnбка обращения к базе ".mysql_error());	
mysql_query('SET names "utf8"');
/*
$host = 'localhost';
$database = 'shop';
$user = 'admin';
$password = '123';

$mysqli = new mysqli($host, $user, $password, $database);

if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
		 $sql = "SELECT * FROM product";
		 $result = mysql_query($sql)  or die(mysql_error());
		 mysqli_set_charset($mysqli, "utf-8");
*/

?>