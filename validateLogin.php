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
    <div class="ui grid container">
        <div class="four column row">

        </div>
    </div>
    <?php

        if (isset($_POST['submit']))
        {


            $userCredits = sanitizeString($_POST['userCredits']);;
            $pass = sanitizeString($_POST['password']);

            echo $passwd = cryptObject($salt1, $pass, $salt2);

            $login = new Login();

            $login->userCredits = $userCredits;
            $login->pass = $passwd;


            $login->processLogin();
            echo $login->error;

        }
    ?>

</section>
<!--*** END PERSONAL WEBSITE CODE (#tdd-website-main-content) ***-->

<?php require_once('includes/footer.php');?>
<?php require_once('includes/js.php');?>
</body>
</html>
