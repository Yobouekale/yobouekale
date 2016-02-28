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

    <script src="resources/template/semantic/dist/semantic.min.js"></script>
    <script src="resources/template/semantic/dist/components/reset.css"></script>
    <script type="text/javascript" src="resources/template/semantic/dist/components/dimmer.js"></script>
</head>

<body>
<?php require_once('includes/header.php');?>

<!--*** START PERSONAL WEBSITE CODE (#tdd-website-main-content) ***-->
<section id="tdd-website-main-content tdd-paddingTopSmall">
    <script>
        $(document)
            .ready(function() {
                $('.ui.form')
                    .form({
                        fields: {
                            userCredits: {
                                identifier  : 'userCredits',
                                rules: [
                                    {
                                        type   : 'empty',
                                        prompt : "Votre pseudo ou email s'il vous plait"
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
                                        type   : 'minLength[4]',
                                        prompt : "Votre mot de passe doit comprendre au moins 6 caractères"
                                    }
                                ]
                            },

                            stayloggein: {
                                identifier : 'terms',
                                rules: [
                                    {
                                        type   : 'checked',
                                        prompt : 'Vous devez accepter les Terms et Conditions'
                                    }
                                ]
                            }
                        },

                        onSuccess: function(){
                            $("#formValidating").addClass('active');
                            /*$.ajax({
                             type: "POST",
                             url: "validateLogin.php",
                             data: dataString,
                             cache: false,
                             success: function(result){
                             var result=trim(result);
                             if(result=='correct'){
                             $("#formValidating").removeClass('active');
                             window.location='index.php';
                             }else{
                             $("#errorMessage").html(result);
                             }
                             }
                             });*/

                            function trim(str){
                                var str=str.replace(/^\s+|\s+$/,'');
                                return str;
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
                Bienvenue sur Yoboukalé Admin Panel
            </div>
            <p>Connecter vous ou clicker sur le lien en bas pour vous inscrire</p>
        </div>
        <div class="ui inverted dimmer" id="formValidating">
            <div class="ui text loader">Loading</div>
        </div>
        <form class="ui form attached fluid segment" action="validateLogin.php" method="post">
            <p>Qui etes vous?</p>
            <div class="fields">
                <div class="field">
                    <label>Pseudo ou Email</label>
                    <input placeholder="Pseudo ou Email" name="userCredits">
                </div>
                <div class="field">
                    <label>Mot de passe</label>
                    <input type="password" name="password">
                </div>
            </div>
            <!--div class="inline field">
                <div class="ui checkbox">
                    <input type="checkbox" name="terms">
                    <label>I agree to the terms and conditions</label>
                </div>
            </div-->
            <button class="ui blue submit button" name="submit">Submit</button>
            <div class="ui error message"></div>
        </form>
        <div class="ui bottom attached warning message">
            <i class="icon help"></i>
            Vous n'avez pas de compte? <a href="#">Appeler votre administrateur réseau.
        </div>
    </div>

</section>
<!--*** END PERSONAL WEBSITE CODE (#tdd-website-main-content) ***-->

<?php require_once('includes/footer.php');?>
<?php require_once('includes/js.php');?>
</body>
</html>



