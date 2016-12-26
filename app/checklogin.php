<?php
include 'connect.php';

function isEmpty ($email,$password) {
    if(empty($password) || empty($email)) {
        return true;
    } else return false;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $clean = stripcslashes($_POST['data']);
    $data = json_decode($clean);

    $email = $data->email;
    $password = $data->password;

    if (isEmpty($email, $password)) {
        $answer = array(
            "isValid" => false,
            "error" => "Все поля обязательны для заполнения"
        );
    } else {
        $email_clean = mysqli_real_escape_string($mysqli, $email);
        $query = mysqli_query($mysqli, "SELECT email, password FROM users WHERE email='" . $email_clean . "' LIMIT 1");
        $result = mysqli_fetch_assoc($query);

        if ($password === $result['password']) {
            $answer = array(
                "isValid" => true,
                "error" => ""
            );
        } else {
            $answer = array(
                "isValid" => false,
                "error" => "Неверное имя пользователя или пароль"
            );
        }
    }
    echo json_encode($answer);
}
