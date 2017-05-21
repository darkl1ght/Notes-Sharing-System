<!DOCTYPE html>
<?php
require 'connect.inc.php';
require 'core.inc.php';
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-theme.min.css" rel="stylesheet" >
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/bootstrap-social.css" rel="stylesheet">
        <link href="css/mystyles.css" rel="stylesheet">
        <title>Home Page</title>
    </head>
    <body background="Screenshot/back13.jpg" id="background_style">
        <div class="row">
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="container">
                    <ul class="nav navbar-nav col-sm-6">
                        <li class="col-sm-6" id="nav_image">
                            <a href="index.php" id="nav_text">
                            <img src="Screenshot/note2.png" width="25" height="25" alt="Notes_Share_note2">
                                  <span class="active" style="color:white">Notes-Share</span>
                            </a>
                        </li>

                    </ul>
                    <ul class="nav navbar-nav col-sm-6">
                        <li style="padding:-10px 0px 5px">
                        <a data-toggle="modal" data-target="#loginModal" id="log">
                        <button class="btn btn-primary"><span class="glyphicon glyphicon-log-in" style="color:white"></span><span style="color:white"> Login</span></button>
                        </a>
                    </li>
                    </ul>
                </div>
            </nav>
            <div id="loginModal" class="modal fade modal-admin" role="dialog">
                <div class="modal-dialog">
            <!-- Modal Content -->
                </div>
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Login</h4>
                    </div>
                    <div class="modal-body">
<?php
if(loggedin()){
    echo 'You\'re already logged in!<br>Please Logout and Login again to Continue.  (<a href="logout.php">Logout</a>)';
}
else{
    include 'forms/loginform.inc.php';
}
?>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="container col-sm-12" id="second_block_pad">
                <div class="col-sm-4" id="logo_pad">
                    <img src="Screenshot/logo2.jpg" width="245px" height="456x" alt="notes_share_logo2" id="image_left_margin">
                </div>
                <div class="col-sm-1">
                    <p class="grad"></p>
                    <p class="grad2"></p>
                </div>
                <div id="Signup" class="col-sm-6" style="padding:50px 0px 0px 320px">
<?php
if(!loggedin()){
    require 'forms/registerform.php';
}
else if(loggedin()){
    echo '<br><br><br><br><br><br><br><br>  <h4>You are already registered and logged in.</h4><br>';
    echo '<a href="profilepage.php"><button class="btn btn-success">Profile Page</button></a> <span style="padding:0px 0px 0px 10px"></span>   <a href="logout.php"><button class="btn btn-danger">Logout</button></a>';
}
                    ?>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <footer class="row-footer" id="footer_color">
            <div class="container footer_text">
                <div class="row footer_text">
                    <div class="col-xs-12 col-xs-offset-1 col-sm-3">
                        <h5><strong>Links</strong></h5>
                        <ul class="list-unstyled">
                            <li><a href="aboutpage.php">About Us</a></li>
                            <li><a href="contact.php">Contact</a></li>
                            <li><a href="forum.php">Forums</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <h5><strong>Our Address</strong></h5>
                        <address>
                            <div class="footer_text">
                                S.G.S.T.I.S. College<br>
                                23, Park Road<br>
                                Indore, M.P.<br>
                                <i class="fa fa-phone"></i>  Tel.: +91 8085519964<br>
                                <i class="fa fa-fax"></i>  Fax: +852 8765 4321<br>
                                <i class="fa fa-envelope"></i>  Email: <a href="https://accounts.google.com/ServiceLogin?sacu=1&scc=1&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F%3Ftab%3Dwm&hl=en&service=mail#identifier">vinay.badhan21@gmail.com</a><br><a href="https://accounts.google.com/ServiceLogin?sacu=1&scc=1&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F%3Ftab%3Dwm&hl=en&service=mail#identifier">ayoushchauhan1996@gmail.com</a>
                            </div>
                        </address>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-sm-offset-1">
                        <div class="nav navbar-nav" id="footer_icon_pad">
                            <a class="btn btn-social-icon btn-google-plus" href="http://google.com/+"><i class="fa fa-google-plus"></i></a>
                            <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><i class="fa fa-facebook"></i></a>
                            <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/"><i class="fa fa-linkedin"></i></a>
                            <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><i class="fa fa-twitter"></i></a>
                            <a class="btn btn-social-icon btn-youtube" href="http://youtube.com/"><i class="fa fa-youtube"></i></a>
                            <a class="btn btn-social-icon" href="mailto:"><i class="fa fa-envelope-o"></i></a>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <br>
                        <p align=center>
                            <!--Â-->© Copyright 2016 Notes Sharing System
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
         <!--Include all compiled plugins (below), or include individual files as needed-->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>