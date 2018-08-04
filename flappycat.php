<!-- /* 
    Created on : 15-Jul-2018, 06:02:39 PM
    Author     : Marc Freir
    License    : This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
*/ -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Flappy Cat JS | Marc Freir</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
    <!-- Calling the script file for the functionality -->
    <!-- <script src="flappyBird.js"></script> -->
    
    <!-- Calling JQuery from the file (without CDN)-->
    <script src="js/jquery-3.3.1.js"></script>

    <!-- Calling JQuery Mobile from the file (without CDN)-->
    <link rel="stylesheet" type="text/css" media="screen" href="jquery-mobile/jquery.mobile-1.4.5.css" />
    <script src="jquery-mobile/jquery.mobile-1.4.5.js"></script>

    <!-- Calling Bootstrap from the file (without CDN)-->
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.css" />
    <script src='js/bootstrap.js'></script>

    <!-- Calling Font Awesome from the file (without CDN)-->
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/style_page_game.css" />

</head>
<body>
    <div>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-main">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img src="images/bc-main-logo-white.png"></a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse-main">
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="active" href="../../index.php">Home</a></li>
                    <li><a href="../../login.php#about">About</a></li>
                    <li><a href="#">See Cats</a></li>
                    <li><a href="../../login.php">Sign In</a></li>
                </ul>
            </div>
        </div>
    </nav>
    </div>
    <!-- Adding a header for the game -->
    <div class="division">
        <!-- <h3>Flappy Cat by Marc Freir</h3> -->
        <span><button onclick="pauseSong()" type="button" class="btn btn-default">Pause Song</button></span>
        <span><button onclick="playSong()" type="button" class="btn btn-default">Play Song</button></span>
    
        <!-- Creating the canvas os the game -->
        <canvas id="canvas" width="1350" height="560"></canvas>
        <!-- Calling the script file for the functionality -->
        <script src="flappyCat.js"></script>
    </div>
</body>
<footer class="container-fluid text-center">
    <div class="row">
        <div class="col-sm-4">
            <h3>Contact Us</h3>
            <br>
            <h4>7 Bananas Way, Melon Bread Park, BC M30 W3H</h4>
        </div>
        <div class="col-sm-4">
            <h3>Connect</h3>
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-google"></a>
            <a href="#" class="fa fa-linkedin"></a>
            <a href="#" class="fa fa-youtube"></a>
        </div>
        <div class="col-sm-4">
            <img src="images/bc-gm.png" class="icon">
        </div>
    </div>
</footer>
</html>