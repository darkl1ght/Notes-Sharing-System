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
                        <li id="nav_image" style="padding:15px 0px 0px 0px">
                            <a href="index.php" style="padding:4px" id="nav_text"><img src="Screenshot/note2.png" width="25" height="25" alt="Notes_Share_note2"><span style="font-size:17px; color:white"> Notes-Share  </span>
                            </a>
                        </li>
                        <li style="padding: 6px 0px 0px 0px"><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true" style="color:white"></span> <span style="color:white"> Home</span></a></li>
                        <li style="padding: 6px 0px 0px 0px">
                            <a href="aboutpage.php">
                                <span class="glyphicon glyphicon-info-sign" style="color:white"></span>
                                <span style="color:white"> About </span>
                            </a>
                        </li>
                        <li style="padding: 6px 0px 0px 0px"><a href="contact.php"><i class="fa fa-envelope-o" style="color:white"></i> <span style="color:white"> Contact</span></a></li>
                        <li class="active" style="padding: 6px 0px 0px 0px"><a href="forum.php"><i class="glyphicon glyphicon-list-alt" style="color:white"></i> <span style="color:white"> Forums</span></a></li>
<
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
                    <li>Forums</li>
                </ol>
            </div>
        <div>
            <h3 style="color:white;padding:0px 0px 0px 20px">Forums</h3>
            <hr>
        </div>
        </div>



        <div class="col-xs-12" id="faq">
                <h2 style="color:white;font-size:22px;padding:0px 0px 0px 5px">FAQs</h2>
                <div class="tab-content">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="ques1">
                                <h3 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#q1" aria-expanded="true" aria-controls="q1">Q.1 <span style="font-size:15px"> Why to use Notes Sharing System when we can share images on popular mobile apps like whatsapp?</span></a></h3>
                            </div>
                            <div role="tabpanel" class="panel-collapse collapse in" id="q1" aria-labelledby="ques1">
                                <p style="padding:0px 5px">It is a well known fact that whatsapp is created with the purpose of group or peer to peer chatting.It lacks the feature of creating a proper repository of shared notes.</p>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="ques2">
                                <h3 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#q2" aria-expanded="true" aria-controls="q2">Q.2 <span style="font-size:15px"> Does Notes Sharing System cost any money for registration?</span></a></h3>
                            </div>
                            <div role="tabpanel" class="panel-collapse collapse" id="q2" aria-labelledby="ques2">
                                <p style="padding:0px 5px">It's absolutely free! Notes Sharing System is created with the aim of open collaboration of notes and is not aimed for monetizing purpose.</p>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="ques3">
                                <h3 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#q3" aria-expanded="true" aria-controls="q3">Q.3  <span style="font-size:15px">What benefits does Notes Sharing System provide?</span></a></h3>
                            </div>
                            <div role="tabpanel" class="panel-collapse collapse" id="q3" aria-labelledby="ques3">
                                <p style="padding:0px 5px">Open collaboration environment enables the users to share notes. Especially for college students, if one misses a class then he/she can easily cover up the topics covered in class by taking a look over the notes.</p>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="ques4">
                                <h3 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#q4" aria-expanded="true" aria-controls="q4">Q.4  <span style="font-size:15px">How to contact the admin?</span></a></h3>
                            </div>
                            <div role="tabpanel" class="panel-collapse collapse" id="q4" aria-labelledby="ques4">
                                <p style="padding:0px 5px">In case you want to contact the admin, then go the contact page link or <a href="contact.php">Click here</a> and address the issue.</p>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="ques5">
                                <h3 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#q5" aria-expanded="true" aria-controls="q5">Q.5 <span style="font-size:15px">Can a person create multiple account using a single email id?</span></a></h3>
                            </div>
                            <div role="tabpanel" class="panel-collapse collapse" id="q5" aria-labelledby="ques5">
                                <p style="padding:0px 5px">No. Only one user account creation is permitted for an email id.</p>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="ques6">
                                <h3 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#q6" aria-expanded="true" aria-controls="q6">Q.6  <span style="font-size:15px">Which browsers support Notes Sharing System?</span></a></h3>
                            </div>
                            <div role="tabpanel" class="panel-collapse collapse" id="q6" aria-labelledby="ques6">
                                <p style="padding:0px 5px">Any modern browser will support Notes Sharing System. If you are using an older version of browser, then it should support javascript plugins.</p>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="ques7">
                                <h3 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#q7" aria-expanded="true" aria-controls="q7">Q.7  <span style="font-size:15px"> Is there any restriction on the content shared with others?</span></a></h3>
                            </div>
                            <div role="tabpanel" class="panel-collapse collapse" id="q7" aria-labelledby="ques7">
                                <p style="padding:0px 5px">Sharing of illicit material will not be tolerated. If found in such activities, admin would delete that user account.</p>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="ques8">
                                <h3 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#q8" aria-expanded="true" aria-controls="q8">Q.8  <span style="font-size:15px">Does Notes Sharing System has mobile responsive feature?</span></a></h3>
                            </div>
                            <div role="tabpanel" class="panel-collapse collapse" id="q8" aria-labelledby="ques8">
                                <p style="padding:0px 5px">The templates are designed using Bootstrap as an UI Framework which use mobile first approach. Thus the content can be rendered using devices of all sizes, whether it a laptop, mobile , tablet or pc.</p>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="ques9">
                                <h3 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#q9" aria-expanded="true" aria-controls="q9">Q.9  <span style="font-size:15px">What format should be used to upload files in Notes Sharing System?</span></a></h3>
                            </div>
                            <div role="tabpanel" class="panel-collapse collapse" id="q9" aria-labelledby="ques9">
                                <p> Currently pdf files should be uploaded. Support for other formats will soon be upgraded.</p>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="ques10">
                                <h3 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#q10" aria-expanded="true" aria-controls="q10">Q.10  <span style="font-size:15px">Does Notes Sharing System support dynamic behaviour?</span></a></h3>
                            </div>
                            <div role="tabpanel" class="panel-collapse collapse" id="q10" aria-labelledby="ques10">
                                <p style="padding:0px 5px">Yes. Notes Sharing System makes use of JS plugins written in Jquery as well as Bootstrap JS components like carousel, modals etc. Angular JS is used as a framework for Javascript.</p>
                            </div>
                        </div>

                    </div>
                </div>
             <div>
                <p style="padding:20px;"></p>
            </div>
       </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
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
