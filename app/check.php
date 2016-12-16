<?php

include 'connect.php';

//$errors=array();

function validate_name($name) {
    if (empty($name)) {
        echo "Поле имя обязательно для заполнения";
    } else if (!(preg_match('/^.{2,20}$/',$name))) {
        echo "Имя должно содержать от 3 до 20 букв";
    } else if (!(preg_match('/[a-zа-я]+/i',$name))){
        echo "Неккоректное имя";
    }
}
function validate_email($email) {
    if (empty($email)) {
        echo "Поле E-mail обязательно для заполнения";
    } else if (!(preg_match('/^.+@.+$/i',$email))){
        echo "Неккоректный E-mail";
    }
}
function validate_pass($password, $password2) {
    if (empty($password)) {
        echo "Поле пароль обязательно для заполнения";
    } else if ($password != $password2) {
        echo "Пароли не совпадают.";
    }
}

function validate_pass($password, $password2) {
    if (empty($password)) {
        echo "Поле пароль обязательно для заполнения";
    } else if ($password != $password2) {
        echo "Пароли не совпадают.";
    }
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];

    validate_name($name);
<<<<<<< HEAD
    validate_pass($password, $password2);

=======
    validate_email($email);
    validate_pass($password, $password2);

    $query = "SELECT * FROM users WHERE email = '" . $email . "'";

    //echo $query;

	$result = mysqli_query($dbc, $query);



	if (mysqli_num_rows($result) < 1) && {
		mysqli_query($dbc, "INSERT INTO users (name,email,password) VALUES ('$name','$email','$password')");
	} 
	else {
		echo "Пользователь с таким E-mail уже существует!";
	}
>>>>>>> 867f0f4bea22a8a67dadcf55f7848831b36c658f
}
?>