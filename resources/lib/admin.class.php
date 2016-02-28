<?php

require_once 'config.php';


class Admin {
    private $fname;
    private $lname;
    private $email;
    private $pass;
    private $ref = md5($fname.$lname.$email.$pass);
    private $account_type;
    private $signup_dtae;
    private $last_loigin_date;
    private $last_login_ip;

    public $error

    function registerAdmin() {
        if ($this->fname == "" || $this->lname == "" || $this->email == "" || $this->pass == "" || $this->account_type == "")
        {
            $this->error = " Tout les champs n'ont pas été remplis";
        }

        /******************************* FULL NAME  ***************************/

        else if (strlen($this->fname) < 3 || strlen($this->lname) )
        {
            $this->error = "Le nom doit être au moins 5 caractères ";
        }

        else if (preg_match("/[^ a-zA-Z0-9_-]/", $this->fname))
        {

            $this->error = "Le nom est invalid";

        }



        /***************************** PASSWORD *******************************/

        else if (strlen($this->pass) < 5)
        {
            $this->error = "Le mot de passe doit être au moins 5 caractères";
        }

        else if (preg_match("/[^a-zA-Z0-9.#_-]/", $this->pass))
        {

            $this->error = "Mot de passe invalide";

        }


        /******************************* EMAIL **********************************/

        else if (!((strpos($this->email, ".") > 0) && (strpos($this->email, "@") > 0)) || preg_match("/[^a-zA-Z0-9.@_-]/", $this->email))
        {

            $this->error = " L'adresse e-mail est invalide";

        }


        /******************************* EMAIL ****************************************/

        else
        {
            if (mysql_num_rows(queryMysql("SELECT * FROM admin WHERE admin_ref = '$this->ref' OR admin_full_name='$this->full_name' OR admin_contact='$this->contact' OR admin_email='$this->email'")))
                $this->error = "ce compte existe déjà";

            else
            {

                queryMysql("INSERT INTO admin (admin_ref, admin_full_name, admin_contact, admin_email, admin_pass, admin_img, admin_privilege, admin_status, added_time) VALUES('$this->ref', '$this->full_name', '$this->contact', '$this->email', '$this->password', '$this->defaultImg', '$this->privilege', 'active', UTC_TIMESTAMP())");



                $_SESSION['user'] = $this->email;
                $_SESSION['pass'] = $this->password;
                echo '<script language="Javascript">
        <!--
        document.location.replace("index.php");
        // -->
        </script>';

            }



        }
    }

}