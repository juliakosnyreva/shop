<?php

class Controller_User extends Controller {

	function __construct(){
		$this->model = new Model_User();
		$this->view = new View();
	}
	
	function action_index() {

	}
	
	function action_login() {

        $data["answer"] = true;


        if(isset($_POST['email']) && isset($_POST['password'])) {

            if (!empty($email) || !empty($password)) {

                $email = mysql_real_escape_string($_POST['email']);
                $password = mysql_real_escape_string($_POST['password']);

                $data_user = $this->model->get_user($email);

                foreach ($data_user as $user) {
                    $user_email = $user["email"];
                    $user_password = $user["password"];
                }

                if (($email != $user_email) || ($password != $user_password)) {
                    $data["answer"] = false;
                }

            }
            else {
                $data["answer"] = false;
            }
            //$user_email=$data_user->email;

        }
        $this->view->generate('authForm_view.php', 'header_view.php', $data);

	}


	function action_registration () {
        $email="";
        $password="";
        $this->model->add_user($email,$password);
    }


}
