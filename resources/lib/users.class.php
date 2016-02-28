<?php

require_once 'config.php';


class Users {
    public $fullname;
    public $email;
    public $username;
    public $pass;
    public $default_perm = '00000000';
    public $activation_token;
    public $last_join;
    public $join_date;

    public $error;

    function __construct(){

    }

    function registerUser() {
        $this->activation_token = cryptObject($this->email, $this->username ,$this->pass);

        $db = new DataBase();
        $db->beginTransaction();

        $db->query("INSERT INTO users (username, email, pass, user_perm, forum_perm, admin_perm, elearning_perm, activation_token, last_join, join_date) VALUES
(:username, :email, :pass, :default_perm, :default_perm, :default_perm, :default_perm, :activation_token, UTC_TIMESTAMP(), UTC_TIMESTAMP())");
        $db->bind(':username', $this->username);
        $db->bind(':email', $this->email);
        $db->bind(':pass', $this->pass);
        $db->bind(':default_perm', $this->default_perm);
        $db->bind(':activation_token', $this->activation_token);
        $db->execute();

        $db->query("INSERT INTO user_details (user_token, fullname, image, signature, mobile, gender, birthdate, country, city) VALUES
(:activation_token, :fullname, '', '', '', '', '', '', '')");

        $db->bind(':activation_token', $this->activation_token);
        $db->bind(':fullname', $this->fullname);
        $db->execute();

        $db->endTransaction();

        $login = new Login();
        $login->userCredits = $this->email;
        $login->pass = $this->pass;
        $login->processLogin();
    }

    function fetchAllUsers() {
        $db = new Database();
        $db->beginTransaction();
        $db->query("SELECT * FROM users");
        $rows = $db->resultset();


        $db->endTransaction();
        return $rows;

        /*
         * THIS IS HOW YOU USE THE FUNCTION ! CHeeeese ... photo ? Click Click ! Yeaaah
         * $fetchAllUsers = new Users();
         * $users = $fetchAllUsers->fetchAllUsers();
         * print_r($users);
         *
         * PRINT SPECIFIC ARRAY ELEMENT (ex: username)
         * for($i = 0; $i < 4; $i++){
         *  echo "<div>";
         *  print_r($users[$i]['username']);
         *  echo "</div>";
         * }
}
         */
    }

    function fetchUser($token) {
        $db = new Database();
        $db->query("SELECT * FROM users WHERE activation_token = :token");
        $db->bind(':token', $token);
        $rows = $db->resultset();
        return $rows;

        /*
         * THIS IS HOW YOU USE THE FUNCTION ! CHeeeese ... photo ? Click Click ! Yeaaah
         * $fetchUser = new Users();
         * $usr_email = $fetchUser->email = "kaidstroodanastase@gmail.com";
         * $user = $fetchUser->fetchUser("$usr_email");
         * print_r($user[0]['username']);
         */
    }

    function fetchUserDetails($token) {
        $db = new Database();
        $db->query("SELECT * FROM user_details WHERE user_token = :token");
        $db->bind(':token', $token);
        $rows = $db->resultset();
        return $rows;

        /*
         * THIS IS HOW YOU USE THE FUNCTION ! CHeeeese ... photo ? Click Click ! Yeaaah
         * $fetchUser = new Users();
         * $usr_email = $fetchUser->email = "kaidstroodanastase@gmail.com";
         * $user = $fetchUser->fetchUser("$usr_email");
         * print_r($user[0]['username']);
         */
    }



}