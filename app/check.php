<?php

include 'connect.php';

function validate_name($name) {
    if (empty($name)) {
        echo "Поле имя обязательно для заполнения";
    } else if (!(preg_match('/^.{2,20}$/',$name))) {
        echo "Имя должно содержать от 3 до 20 букв";
    } else if (!(preg_match('/[a-zа-я]+/i',$name))){
        echo "Неккоректное имя";
    }



}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    validate_name($name);

    $query = "SELECT * FROM users WHERE name='$name'";
    //$query = "SELECT * FROM users WHERE name = '" . $name . "'";

    //echo $query;

	$result = mysqli_query($dbc, $query);

	if (mysqli_num_rows($result) < 1){
		mysqli_query($dbc, "INSERT INTO users (name,email,password) VALUES ('$name','$email','$password')");
	} 
	else {
		echo "Пользователь с таким E-mail уже существует!";
	}
}
?>