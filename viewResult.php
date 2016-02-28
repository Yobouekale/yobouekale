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
if($loggedin != TRUE){
    echo '<script language="Javascript">document.location.replace("login.php");</script>';
}

require 'osms.class.php';
use \Osms\Osms;
?>

<!--*** START PERSONAL WEBSITE CODE (#tdd-website-main-content) ***-->
<section id="tdd-website-main-content tdd-paddingTopBig">

    <table class="ui red table">
        <thead>
        <tr><th>Vulnerabilité</th>
            <th>Niveau</th>
            <th>Port Concerné</th>
            <th>Info sur la vunlnérabilité</th>
        </tr></thead><tbody>
        <?php

        $getVul = new Vulnerability();
        $getVul->showVul($_GET['result']);

        ?>
        </tbody>
    </table>

</section>
<!--*** END PERSONAL WEBSITE CODE (#tdd-website-main-content) ***-->

<?php require_once('includes/footer.php');?>
<?php require_once('includes/js.php');?>
</body>
</html>