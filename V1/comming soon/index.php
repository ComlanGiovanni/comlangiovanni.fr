<?php
session_start();
?>
<!DOCTYPE html>
<!--/
                     ______
                    /     /\
                   /     /##\
                  /     /####\
                 /     /######\
                /     /########\
               /     /##########\
              /     /#####/\#####\
             /     /#####/++\#####\
            /     /#####/++++\#####\
           /     /#####/\+++++\#####\
          /     /#####/  \+++++\#####\
         /     /#####/    \+++++\#####\
        /     /#####/      \+++++\#####\
       /     /#####/        \+++++\#####\
      /     /#####/__________\+++++\#####\
     /                        \+++++\#####\
    /__________________________\+++++\####/
    \+++++++++++++++++++++++++++++++++\##/
     \+++++++++++++++++++++++++++++++++\/
      ``````````````````````````````````

    /-->
<html lang="fr">
    <head>
        <title>Comming soon</title>
        <meta charset="UTF-8">
        <meta name="description" content="Portfolio de COMLAN Giovanni">
        <meta name="author" content="COMLAN Giovanni">
        <meta name="keywords" lang="fr" content="COMLAN Giovanni PORTFOLIO">
        <meta name="reply-to" content="giovanni.comlan@yahoo.fr">
        <meta name="robots" content="noarchive">
        <meta http-equiv="Cache-control" content="no-cache">
        <!--
        <meta http-equiv="Cache-Control" content="max-age=600" />
        -->
        <!-- Chrome, Firefox OS and Opera -->
        <meta name="theme-color" content="#000000">
        <!-- Windows Phone -->
        <meta name="msapplication-navbutton-color" content="#000000">
        <!-- iOS Safari -->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
        <link rel="icon" type="image/x-icon" href="images/Radiation.png"/>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/appcom.css">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
        <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
        <script src='https://www.google.com/recaptcha/api.js'></script>
    </head>
    <body>
        <p class="commingsoon animated bounce">COMMING SOON. :)</p>
        <div class="container">
            <img class="gif img-responsive" src="http://www.laboiteverte.fr/wp-content/uploads/2015/05/gif-anime-space-Cento-Lodigiani-06.gif" alt="gifs">
        </div>
        <br>
        <br>
        <br>
        <?php

        if(!empty($_POST)) {
            var_dump($_POST);
        }
        ?>
        <div class="container">
            <div class="row-centered mt mb">
                <form action="post_contact.php" method="post">

                    <div class="col-lg-6 col-lg-offset-3">

                        <?php if(array_key_exists('errors',$_SESSION)):?>

                        <div class="alert alert-danger">

                            <?= implode('<br>',$_SESSION['errors']);?>

                        </div>

                        <?php endif; ?>

                        <?php if(array_key_exists('success',$_SESSION)):?>

                        <div class="alert alert-success">

                            <p>Votre Formulaire a bien été envoyé</p>

                        </div>

                        <?php endif; ?>

                        <p class="formulairedecontact">Formulaire de contact</p>

                        <div class="form-group">
                            <label for="inputname">
                                <p>Votre nom</p>
                            </label>

                            <div class="input-group">
                                <input required type="text" name="name" class="form-control" id="inputname" value="<?= isset($_SESSION['inputs']['name']) ? $_SESSION['inputs']['name']: '';?>">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-user"></span>
                                </span>
                            </div>
                            <br>
                        </div>

                        <div class="form-group">
                            <label for="inputemail">
                                <p>Votre Email</p>
                            </label>

                            <div class="input-group">
                                <input required type="text" name="email" class="form-control" id="inputemail" value="<?= isset($_SESSION['inputs']['email']) ? $_SESSION['inputs']['email']: '';?>">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-envelope"></span>
                                </span>
                            </div>
                            <br>
                        </div>

                        <div class="form-group">
                            <label for="inputmessage">
                                <p>Votre message</p>
                            </label>

                            <div class="input-group">
                                <textarea required  id="inputmessage" rows="8" name="message" class="form-control" maxlength="1000" ><?= isset($_SESSION['inputs']['message']) ? $_SESSION['inputs']['message']: '';?></textarea>
                                <span class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></span>
                            </div>
                            <br>
                        </div>

                        <div class="g-recaptcha" data-sitekey="6LeF3hsTAAAAAGO3oh6I0kLqjtp1eUMiZ_MomniN"></div>
                        <br>
                        <button type="submit" class="btn btn-success btn-lg btn-block">
                            <p class="envy">Envoyer</p>
                        </button>

                        <br />
                        <br />

                    </div>

                </form>
            </div>
        </div>
        <br>
        <br>

        <div class="wrapper">
            <div class="mario mario1"></div>
            <div class="mario mario2"></div>
            <div class="mario mario3"></div>
            <div class="mario mario4"></div>
            <div class="mario mario5"></div>
            <div class="mario mario6"></div>
            <div class="mario mario7"></div>
            <div class="mario mario8"></div>
            <div class="mario mario9"></div>
            <div class="mario mario10"</div>
        </div>
        <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
        <script src="js/konami.js"></script>
        <!-- Google Analytics -->
        <script class="text/javascript">
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                                    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-75367900-1', 'auto');
            ga('send', 'pageview');

        </script>
    </body>
</html>
<?php
unset($_SESSION['inputs']);
unset($_SESSION['errors']);
unset($_SESSION['success']);
?>
