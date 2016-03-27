<?php

?>

<!DOCTYPE html>

<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Comming soon</title>
        <link rel="icon" type="image/x-icon" href="images/Radiation.png"/>
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="/css/animate.css">
        <link rel="stylesheet" href="/css/appcom.css">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
        <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
    </head>
    <body>
        <p class="commingsoon animated bounce">COMMING SOON. :)</p>
        <div class="container">
            <img class="gif img-responsive" src="http://www.laboiteverte.fr/wp-content/uploads/2015/05/gif-anime-space-Cento-Lodigiani-06.gif" alt="gifs">
        </div>
        <br>
        <br>
        <div class="container">
            <div class="row-centered mt mb">
                <form action="" method="post">

                    <div class="col-lg-6 col-lg-offset-3">

                        <div class="form-group">
                            <label for="inputname">
                                <p>Votre nom</p>
                            </label>
                            <div class="input-group">
                                <input required type="text" name="name" class="form-control" id="inputname" value="">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span></div>
                        </div>

                        <div class="form-group">
                            <label for="inputemail">
                                <p>Votre Email</p>
                            </label>
                            <div class="input-group">
                                <input required type="email" name="email" class="form-control" id="inputemail" value="">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span></div>
                        </div>

                        <div class="form-group">
                            <label for="inputmessage">
                                <p>Votre message</p>
                            </label>
                            <div class="input-group">
                                <textarea required id="inputmessage" rows="8" name="message" class="form-control"></textarea>
                                <span class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></span></div>
                        </div>

                        <button type="submit" class="btn btn-custom btn-lg btn-block">
                            <p>Envoyer</p>
                        </button>
                        <br />
                        <br />
                        <div class="well well-sm"><strong><span class="fa fa-check-square-o"></span> Champs requis pour envoyer votre message</strong></div>

                    </div>

                </form>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
        <script src="/js/konami.js"></script>
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
