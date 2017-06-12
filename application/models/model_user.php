<?php

class Model_User extends Model {
	
	public function get_user($email) {
	
		 $sql = "SELECT email,password FROM user WHERE email='".$email."' LIMIT 1";
		 $result = mysql_query($sql);

		while ($row = mysql_fetch_assoc($result)) {		 
			$userData[]=array(
				"email"=>$row['email'],
				"password"=>$row['password']
			);
		}
		return $userData;
	}

    public function add_user($email,$password) {

        $sql = "INSERT INTO `user` (`email`,`password`) VALUES ('. $email .','. $password .')";
        $result = mysql_query($sql);

        if ($result) $answer=true;
            else $answer=false;

        return $answer;
    }

}
