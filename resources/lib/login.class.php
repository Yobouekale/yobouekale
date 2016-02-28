<?php

require_once 'config.php';


class Login {
    public $userCredits;
    public $pass;
    public $stayLoggedIn;

    public $error;

    function __construct(){

    }

    function processLogin() {

        $db = new DataBase();
        $db->beginTransaction();
        $db->query("SELECT * FROM users WHERE username = :userCredits OR email = :userCredits");
        $db->bind(":userCredits", $this->userCredits);
        $db->execute();

        $rows = $db->resultset();
        $resultCount = $db->rowCount();

        if($resultCount == "0"){
            //echo '<script language="Javascript">document.location.replace("index.php");</script>';
            $this->error = "Pas de compte!";
        }
        else {
            $activation_token = $rows[0]['activation_token'];
            $_SESSION['activation_token'] = $activation_token;

            if($rows[0]['pass'] == $this->pass){
                $_SESSION['token'] = $activation_token;
                echo '<script language="Javascript">document.location.replace("index.php");</script>';
            }
            else {
                echo '<script language="Javascript">document.location.replace("login.php");</script>';
                $this->error = "Ooops ... Vous vous etes tromper !";
            }
        }

        /*


        if($resultCount > 0){
            //$_SESSION['LOGIN_STATUS']=true;
            //$_SESSION['UNAME']=$uname;
            $this->error = $resultCount;;
            return $this->error;
        }
        else{
            $this->error = $resultCount;
            return $this->error;
        }*/

    }

    function destroySession()
    {
        $_SESSION=array();

        if (session_id() != "" || isset($_COOKIE[session_name()]))
            setcookie(session_name(), '', time()-2592000, '/');

        session_destroy();
    }

}