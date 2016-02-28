<!DOCTYPE html>
<html lang="fr">

<head id="head">

    <title></title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content=""/>
    <link rel="canonical" href=""/>
    <meta property="og:locale" content="fr-FR"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content=""/>
    <meta property="og:description" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>

    <?php require_once('includes/fe_frameworks.php');?>
    <?php require_once('includes/css.php');?>

</head>

<body>
<?php
require_once('includes/header.php') ;

?>

<!--*** START PERSONAL WEBSITE CODE (#tdd-website-main-content) ***-->
<section id="tdd-website-main-content tdd-paddingTopSmall">
    <?php

    if (isset($_POST['submit']))
    {
        $fullname = sanitizeString($_POST['fullname']);
        $email = sanitizeString($_POST['email']);
        $username = sanitizeString($_POST['username']);
        $pass = sanitizeString($_POST['password']);

        $passwd = cryptObject($salt1, $pass, $salt2);

        $new_user = new Users;


        $new_user->fullname = $fullname;
        $new_user->email = $email;
        $new_user->username = $username;
        $new_user->pass = $passwd;

        $new_user->registerUser();
        echo $new_user->error;
    }
    ?>


    <script src="resources/template/semantic/dist/semantic.min.js"></script>
    <script src="resources/template/semantic/dist/components/reset.css"></script>
    <script type="text/javascript" src="resources/template/semantic/dist/components/dimmer.js"></script>

    <script>
        $(document)
            .ready(function() {
                $('.ui.form')
                    .form({
                        fields: {
                            fname: {
                                identifier  : 'fullname',
                                rules: [
                                    {
                                        type   : 'empty',
                                        prompt : "Votre nom s'il vous plait"
                                    }
                                ]
                            },

                            lname: {
                                identifier : 'lname',
                                rules: [
                                    {
                                        type : 'empty',
                                        prompt : "Votre Nom s'il vous plait"
                                    }
                                ]
                            },

                            email: {
                                identifier  : 'email',
                                rules: [
                                    {
                                        type   : 'email',
                                        prompt : "Votre email n'est pas valide"
                                    }
                                ]
                            },

                            /*skills: {
                             identifier : 'skills',
                             rules: [
                             {
                             type   : 'minCount[2]',
                             prompt : 'Please select at least two skills'
                             }
                             ]
                             },*/


                            username: {
                                identifier : 'username',
                                rules: [
                                    {
                                        type   : 'empty',
                                        prompt : "Votre Pseudo s'il vous plait"
                                    }
                                ]
                            },

                            password: {
                                identifier : 'password',
                                rules: [
                                    {
                                        type   : 'empty',
                                        prompt : "Votre mot de passe s'il vous plait"
                                    },
                                    {
                                        type   : 'minLength[6]',
                                        prompt : "Votre mot de passe doit comprendre au moins 6 caractères"
                                    }
                                ]
                            },

                            terms: {
                                identifier : 'terms',
                                rules: [
                                    {
                                        type   : 'checked',
                                        prompt : 'Vous devez accepter les Terms et Conditions'
                                    }
                                ]
                            }
                        }
                    })
                ;
            })
        ;
    </script>

    <body>
    <div class="ui raised very padded text container">
        <div id="#errorMessage">

        </div>
        <div class="ui attached message">
            <div class="header">
                Bienvenue sur TechnoDream Hocrux Admin Panel
            </div>
            <p>Inscrivez vous ou clicker sur le lien en bas pour vous connecter</p>
        </div>
        <form class="ui form attached fluid segment" action="signup.php" method="post">
            <p>Qui etes vous?</p>
            <div class="fields">
                <div class="field">
                    <label>Nom complet</label>
                    <input placeholder="Nom complet" name="fullname">
                </div>
                <div class="field">
                    <label>Email</label>
                    <input placeholder="abc@exemple.com" name="email">
                </div>
            </div>
            <div class="fields">
                <div class="field">
                    <label>Pseudo</label>
                    <input placeholder="Pseudo" name="username" type="text">
                </div>
                <div class="field">
                    <label>Mot de passe</label>
                    <input type="password" name="password">
                </div>
            </div>
            <div class="inline field">
                <div class="ui checkbox">
                    <input type="checkbox" name="terms">
                    <label>I agree to the terms and conditions</label>
                </div>
            </div>
            <button class="ui blue submit button" name="submit">Submit</button>
            <div class="ui error message"></div>
        </form>
        <div class="ui bottom attached warning message">
            <i class="icon help"></i>
            Vous avez un compte deja? <a href="login.php">Connecter vous</a>.
        </div>
    </div>

</section>
<!--*** END PERSONAL WEBSITE CODE (#tdd-website-main-content) ***-->

<?php require_once('includes/footer.php');?>
<?php require_once('includes/js.php');?>
</body>
</html>

