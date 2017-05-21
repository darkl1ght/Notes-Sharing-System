<!DOCTYPE html>
<?php
require 'core.inc.php';
?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap-social.css" rel="stylesheet">
    <link href="css/mystyles.css" rel="stylesheet">
</head>
<body background="Screenshot/back13.jpg" id="background_style">

     <div class="row">
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                    </div>
                    <ul class="nav navbar-nav">
                        <li id="nav_image"  style="padding: 15px 0px 0px 0px">
                            <a href="index.php" style="padding:4px" id="nav_text"><img src="Screenshot/note2.png" width="25" height="25" alt="Notes_Share_note2"><span style="font-size:17px; color:white"> Notes-Share  </span>
                            </a>
                        </li>
                        <li style="padding: 6px 0px 0px 0px"><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true" style="color:white"></span><span style="color:white" > Home</span></a></li>
                        <li class="dropdown active" style="padding: 6px 0px 0px 0px">
                            <a href="aboutpage.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <span class="glyphicon glyphicon-info-sign" style="color:white"></span>
                                <span style="color:white">About </span><span class="caret" style="color:white"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#intro">Introduction</a></li>
                                <li><a href="#idea">Idea of Notes Sharing System</a></li>
                                <li><a href="#Scope">Scope</a></li>
                                <li role="separator" class="divider"></li>
                                <li class="dropdown-header">Coders</li>
                                <li><a href="#vinay">Vinay Badhan</a></li>
                                <li><a href="#ayush">Ayush Singh Chauhan</a></li>
                                <li><a href="#avinash">Avinash Muvel</a></li>
                            </ul>
                        </li>
                        <li  style="padding: 6px 0px 0px 0px"><a href="contact.php"><i class="fa fa-envelope-o" style="color:white"></i><span style="color:white"> Contact</span></a></li>
                        <li style="padding: 6px 0px 0px 0px"><a href="forum.php"><i class="glyphicon glyphicon-list-alt" style="color:white"></i><span style="color:white"> <span style="color:white">Forums</span></span></a></li>
                        <?php
                        if(loggedin()){
                            require 'logoutbutton.inc.php';
                        }
                        ?>
                    </ul>
                </div>
            </nav>
        </div>
     <div>
         <div style="padding:10px">
             <ol class="breadcrumb">
                 <li class="active"><a href="index.php">Home</a></li>
                 <li>About Us</li>
             </ol>
         </div>
         <div>
             <h3 style="color:white;padding:0px 0px 0px 20px">About Us</h3>
             <hr>
         </div>
    </div>

    <div class="container">
        <div class="row row-content">
            <div class="col-sx-12">
                <div id="mycarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#mycarousel" data-slide-to="1"></li>
                        <li data-target="#mycarousel" data-slide-to="2"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img class="img-responsive" src="Screenshot/Logo2.jpg" alt="Introduction" width="210">
                            <div class="carousel-caption" id="aboutintro">
                                <h2>Introduction </h2>
                                <p>Notes Sharing System is aimed for students to use a collaborative environment to share as well as to upload notes. Creating a proper repository of notes to ease the job of maintenance and making of notes gives student a way to tackle the biggest problem at exam-time i.e. Notes!</p>
                                <p><a href="#intro" class="btn btn-primary btn-xs">More &raquo;</a></p>
                            </div>
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="Screenshot/book.png" alt="Idea of Notes Sharing System" width="210">
                            <div class="carousel-caption">
                                <h2>Idea of Notes Sharing System</h2>
                                <p>The need of notes at exam time especially when the exams are on a trot, we spend sleepless nights just to have a basic idea of the topics in the subject.At such time, we really feel that we should have created the notes at proper time to avoid such hectic schedule.This need lead us to create a system which is capable of not only uploading notes but also provides us a way of sharing them.</p>
                                <p><a href="#idea" class="btn btn-primary btn-xs">More &raquo;</a></p>
                            </div>
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="Screenshot/mobile.gif" alt="Scope" width="250">
                            <div class="carousel-caption">
                                <h2>Scope</h2>
                                <h4 class="media-heading"></h4>
                                <p>Notes Sharing System is not only aimed for a particular group of student, rather it is built for learners around the world. The open sharing environment gives us the benefit of getting help from the notes of other and also we can help others by uploading notes which can help not only our classmates but also other people seeking hlp regarding a partiular system.</p>
                                <p><a href="#Scope" class="btn btn-primary btn-xs">More &raquo;</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- Controls -->

                    <a class="left carousel-control" href="#mycarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#mycarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    <div class="btn-group" id="carouselButtons">
                        <button class="btn btn-primary btn-xs" id="carousel-pause">
                            <span class="glyphicon glyphicon-pause" aria-hidden="true"></span>
                        </button>
                        <button class="btn btn-primary btn-xs" id="carousel-play">
                            <span class="glyphicon glyphicon-play" aria-hidden="true"></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12" id="intro" style="color:white">
                <h2>Introduction</h2>
                <p>Notes Sharing System is aimed for students to use a collaborative environment to share as well as to upload notes. Creating a proper repository of notes to ease the job of maintenance and making of notes gives student a way to tackle the biggest problem at exam-time i.e. Notes!</p>
        </div>
        <hr class="col-sm-12" style="color:white">
        <div class="col-sm-12" id="idea" style="color:white">
                <h2>Idea of Notes Sharing System</h2>
                <p>The need of notes at exam time especially when the exams are on a trot, we spend sleepless nights just to have a basic idea of the topics in the subject.At such time, we really feel that we should have created the notes at proper time to avoid such hectic schedule.This need lead us to create a system which is capable of not only uploading notes but also provides us a way of sharing them.</p>
        </div>
        <hr class="col-sm-12" style="color:white">
        <div class="col-sm-12" id="Scope" style="color:white">
                <h2>Scope</h2>
                <p>Notes Sharing System is not only aimed for a particular group of student, rather it is built for learners around the world. The open sharing environment gives us the benefit of getting help from the notes of other and also we can help others by uploading notes which can help not only our classmates but also other people seeking hlp regarding a partiular system.</p>
        </div>
        <hr class="col-sm-12" style="color:white">
      <div>
            <div class="col-xs-12" id="coders">
                <h2 style="color:white">Coders</h2>
                <div class="tab-content">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingVinay">
                                <h3 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#vinay" aria-expanded="true" aria-controls="vinay">Vinay Badhan</a></h3>
                            </div>
                            <div role="tabpanel" class="panel-collapse collapse in" id="vinay" aria-labelledby="headingVinay">
                                <p style="padding:0px 0px 0px 14px">Hails from Indore. Passionate about technology. Frontend developer using HTML5,CSS3,Bootstrap and Javascript.</p>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingAyush">
                                <h3 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#ayush" aria-expanded="true" aria-controls="ayush">Ayush Singh Chauhan</a></h3>
                            </div>
                            <div role="tabpanel" class="panel-collapse collapse" id="ayush" aria-labelledby="headingAyush">
                                <p style="padding:0px 0px 0px 14px">Back-end Developer of MySQLi Database and phpmyadmin.</p>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingAvinash">
                                <h3 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#avinash" aria-expanded="true" aria-controls="avinash">Avinash Muvel</a></h3>
                            </div>
                            <div role="tabpanel" class="panel-collpase collapse" id="avinash" aria-labelledby="headingAvinash">
                                <p style="padding:0px 0px 0px 14px">SRS developer</p>
                            </div>
                        </div>
                    </div>
                </div>
             <div>
                <p style="padding:20px;"></p>
            </div>
       </div>
    </div>
    </div>
    <footer class="row-footer" style="background-color:#001a1a">
            <div class="row" id="row">
               <div class="col-xs-12 col-xs-offset-1 col-sm-3">
                    <h5 style="color:white"><strong>Links</strong></h5>
                    <ul class="list-unstyled">
                        <li><a href="aboutpage.php">About Us</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="forum.php">Forums</a></li>
                    </ul>
                </div>

                <div class="col-xs-12 col-sm-3">
                    <h5 style="color:white"><strong>Our Address</strong></h5>
                    <address>
                    <div style="color:white">
                      S.G.S.T.I.S. College<br>
                      23, Park Road<br>
                      Indore, M.P.<br>

                      <i class="fa fa-phone"></i>Tel.: +91 8085519964<br>
                      <i class="fa fa-fax"></i>Fax: +852 8765 4321<br>
                      <i class="fa fa-envelope"></i>  Email: <a href="https://accounts.google.com/ServiceLogin?sacu=1&scc=1&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F%3Ftab%3Dwm&hl=en&service=mail#identifier">vinay.badhan21@gmail.com</a><br><a href="https://accounts.google.com/ServiceLogin?sacu=1&scc=1&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F%3Ftab%3Dwm&hl=en&service=mail#identifier">ayoushchauhan1996@gmail.com</a>
                        </div>
                   </address>
                </div>
                <div class="col-xs-12 col-sm-3 col-sm-offset-1">
                    <div class="nav navbar-nav" style="padding: 40px 10px;">
                        <a class="btn btn-social-icon btn-google-plus" href="http://google.com/+"><i class="fa fa-google-plus"></i></a>
                        <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><i class="fa fa-facebook"></i></a>
                        <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/"><i class="fa fa-linkedin"></i></a>
                        <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><i class="fa fa-twitter"></i></a>
                        <a class="btn btn-social-icon btn-youtube" href="http://youtube.com/"><i class="fa fa-youtube"></i></a>
                        <a class="btn btn-social-icon" href="mailto:"><i class="fa fa-envelope-o"></i></a>
                    </div>
                </div>
                <div class="col-xs-12">
                    <p style="padding:10px;"></p>
                    <p align=center style="color:white"><!--Â-->© Copyright 2016 Notes Sharing Systems</p>
                </div>
            </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed-->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>