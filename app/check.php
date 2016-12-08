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

    validate_name($name);
}
?>