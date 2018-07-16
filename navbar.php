<!DOCTYPE html>
<html>
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-108656517-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-108656517-1');
        </script>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Strategy Storm | <?= $title ?></title>
        <meta name="keywords" content="strategy storm, strategy, storm, case competition, business case competition, case study, competition, social business case competition, social business, udgam, e-cell, iit, iit guwahati">
        <meta name="description" content="Strategy Storm is a social business case competition organized by Udgam, IIT Guwahati. It will be organized for the first time in January 2018. Graduate and Undergraduate students from all over India will gather to solve business, marketing and PR problems for social businesses and enterprises.">
        <meta property="og:image" content="./img/header/logo-lg.png">
        <meta property="og:image:type" content="image/png">
        <meta property="og:image:width" content="244">
        <meta property="og:image:height" content="274">
        <link rel="shortcut icon" href="img/header/logo.ico" type="image/x-icon" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css" media="all" />
        <link rel="stylesheet" href="css/styles.css" type="text/css" media="all" />
        <?php if (isset($active_home)) { ?>
            <link rel="stylesheet" href="css/home.css" type="text/css" media="all" />
        <?php } ?>
        <?php if (isset($active_conference)) { ?>
            <link rel="stylesheet" href="css/conference.css" type="text/css" media="all" />
        <?php } ?>
        <?php if (isset($active_competition)) { ?>
            <link rel="stylesheet" href="css/competition.css" type="text/css" media="all" />
            <link rel="stylesheet" href="css/timeline.css" type="text/css" media="all" />
        <?php } ?>
        <?php if (isset($active_apply)) { ?>
            <link rel="stylesheet" href="css/apply.css" type="text/css" media="all" />
        <?php } ?>
        <?php if (isset($active_partners)) { ?>
            <link rel="stylesheet" href="css/partners.css" type="text/css" media="all" />
        <?php } ?>
        <?php if (isset($active_aboutus)) { ?>
            <link rel="stylesheet" href="css/aboutus.css" type="text/css" media="all" />
        <?php } ?>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        <?php if (isset($active_home)) { ?>
            <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDvdnsHp5bkOFufvMB9xjlQtECKCDUenp8&callback=initMap"></script>
            <script src="js/map.js" charset="utf-8"></script>
        <?php } ?>
        <?php if (isset($active_competition)) { ?>
            <script src="js/timeline.js" charset="utf-8"></script>
        <?php } ?>
    </head>
    <body>

        <nav class="navbar fixed-top navbar-expand-md navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="img/header/logo-text-small.png" alt="Strategy Storm" class="d-inline-block align-center img-fluid"/>&nbsp;
                </a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class= "nav-link <?php if (isset($active_home)) echo "active"; ?>" href="/"><span>HOME</span></a>
                        </li>
                        <li class="nav-item">
                            <a class= "nav-link <?php if (isset($active_competition)) echo "active"; ?>" href="competition.php"><span>COMPETITION</span></a>
                        </li>
                        <li class="nav-item">
                            <a class= "nav-link <?php if (isset($active_conference)) echo "active"; ?>" href="conference.php"><span>CONFERENCE</span></a>
                        </li>
                        <li class="nav-item">
                            <a class= "nav-link <?php if (isset($active_apply)) echo "active"; ?>" href="apply.php"><span>APPLY</span></a>
                        </li>
                        <li class="nav-item">
                            <a class= "nav-link <?php if (isset($active_aboutus)) echo "active"; ?>" href="aboutus.php"><span>ABOUT US</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container-fluid">
