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
        ?>

        <!--*** START PERSONAL WEBSITE CODE (#tdd-website-main-content) ***-->
        <section id="tdd-website-main-content">

            <div class="ui grid container tdd-paddingTop-small">
                <div class="ten wide column">
                    <div>
                        <canvas id="canvas" height="50" width="100%"></canvas>
                    </div>
                </div>
                <div class="six wide column">
                    <div class="ui celled list">
                        <div class="item">
                            <img class="ui avatar image" src="img/images/avatar/nan.jpg">
                            <div class="content">
                                <div class="header">Poodle</div>
                                A poodle, its pretty basic
                            </div>
                        </div>
                        <div class="item">
                            <img class="ui avatar image" src="img/images/avatar/tom.jpg">
                            <div class="content">
                                <div class="header">Paulo</div>
                                He's also a dog
                            </div>
                        </div>
                        <div class="item">
                            <img class="ui avatar image" src="img/images/avatar/nan.jpg">
                            <div class="content">
                                <div class="header">Poodle</div>
                                A poodle, its pretty basic
                            </div>
                        </div>
                        <div class="item">
                            <img class="ui avatar image" src="img/images/avatar/tom.jpg">
                            <div class="content">
                                <div class="header">Paulo</div>
                                He's also a dog
                            </div>
                        </div>
                        <div class="item">
                            <img class="ui avatar image" src="img/images/avatar/nan.jpg">
                            <div class="content">
                                <div class="header">Poodle</div>
                                A poodle, its pretty basic
                            </div>
                        </div>
                        <div class="item">
                            <img class="ui avatar image" src="img/images/avatar/tom.jpg">
                            <div class="content">
                                <div class="header">Paulo</div>
                                He's also a dog
                            </div>
                        </div>
                        <div class="item">
                            <img class="ui avatar image" src="img/images/avatar/nan.jpg">
                            <div class="content">
                                <div class="header">Poodle</div>
                                A poodle, its pretty basic
                            </div>
                        </div>
                        <div class="item">
                            <img class="ui avatar image" src="img/images/avatar/tom.jpg">
                            <div class="content">
                                <div class="header">Paulo</div>
                                He's also a dog
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sixteen column row">
                    <div class="ui special cards">
                        <?php
                            $getScan =  new Vulnerability();
                            $getScan->getVul();
                        ?>
                    </div>
                </div>
            </div>
            <?php

            /*
            $file = fopen("dump.txt","r");
            while(! feof($file))
            {
                $lines = fgets($file);
                $members = explode('\n', $lines);
                foreach($members as $vul){
                    $link = "http://cve.mitre.org/cgi-bin/cvename.cgi?name="."$vul";
                    $num = explode(" ", $link);
                    $full_link = $num[0].$num[1];
                    echo '<a href='.$full_link.'>'.$num[1].'</a>';
                    echo '</br>';
                }
            }

            fclose($file);
            */
            ?>

        </section>
        <!--*** END PERSONAL WEBSITE CODE (#tdd-website-main-content) ***-->

        <?php require_once('includes/footer.php');?>
        <?php require_once('includes/js.php');?>
    </body>
</html>