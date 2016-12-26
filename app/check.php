<?php

include 'connect.php';

function validate($name, $password, $password2) {
    $answer = array(
        "nameValid" => true,
        "passValid" => true,
        "errorName" => "",
        "errorPass" => ""
    );
    if (empty($name)) {
        $answer["nameValid"] = false;
        $answer["errorName"] .= " Поле имя обязательно для заполнения";
    }
    if (!(preg_match('/^.{2,20}$/', $name))) {
        $answer["nameValid"] = false;
        $answer["errorName"] .= " Имя должно содержать от 3 до 20 букв";
    }
    if (!(preg_match('/[a-zа-я]+/i', $name))) {
        $answer["nameValid"] = false;
        $answer["errorName"] .= " Некорректное имя";
    }

    if (empty($password)) {
        $answer["passValid"] = false;
        $answer["errorPass"] = "Поле пароль обязательно для заполнения";
    } else if ($password != $password2) {
        $answer["passValid"] = false;
        $answer["errorPass"] = "Пароли не совпадают.";
    }
    return $answer;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $clean = stripcslashes($_POST['data']);
    $data = json_decode($clean);
    $name = $data->name;
    $password = $data->password;
    $password2 = $data->password2;

    $validationStatus = validate($name,$password, $password2);
    echo json_encode($validationStatus);
}
?>