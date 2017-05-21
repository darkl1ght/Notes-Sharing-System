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

     <style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
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
                     <li  style="padding: 6px 0px 0px 0px"><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true" style="color:white"></span> <span style="color:white">Home</span></a></li>
                     <li style="padding: 6px 0px 0px 0px"><a href="aboutpage.php">
                             <span class="glyphicon glyphicon-info-sign" style="color:white"></span>
                             <span style="color:white"> About</span>
                         </a>
                     </li>
                     <li style="padding: 6px 0px 0px 0px" class="active"><a href="contact.php"><i class="fa fa-envelope-o"></i> Contact</a></li>
                     <li style="padding: 6px 0px 0px 0px"><a href="forum.php"><i class="glyphicon glyphicon-list-alt" style="color:white"></i> <span style="color:white"> Forums</span></a></li>
                     <?php
                        if(loggedin()){
                            require 'logoutbutton.inc.php';
                        }
                        ?>
                 </ul>
             </div>
         </nav>
    </div>
    <div style="padding:10px 10px 0px 10px">
        <ol class="breadcrumb">
            <li class="active"><a href="index.php">Home</a></li>
            <li>Contact</li>
        </ol>
    </div>
    <div>
        <h3 style="color:white;padding:0px 0px 0px 20px">Contact</h3>
        <hr>
    </div>

     <div class="container">

        <div class="row">
           <div class="col-xs-12">
              <h3 style="color:white">Location Information</h3>
           </div>
            <div class="col-xs-12 col-sm-4 col-sm-offset-1" style="color:white">
                   <h4>Our Address</h4>
                    <address style="font-size: 100%">
		              <span style="color:white">S.G.S.I.T.S, College<br>
		              23, Park Road<br>
		              Indore, M.P.<br>
		              <i class="fa fa-phone"></i>: +8085519964<br>
		              <i class="fa fa-envelope"></i>:
                        <a href="http://google.co.in" style="color:white">vinay.badhan21@gmail.com<br>ayoushchauhan1996@gmail.com</a>
                        </span>
		           </address>
            </div>
            <div class="col-xs-12 col-sm-6 col-sm-offset-1">
                <h4 style="color:white">Map of our Location</h4>
                <img src="Screenshot/map.png" height="310px" width="480px">
            </div>
            <div class="col-xs-12 col-sm-11 col-sm-offset-1" style="margin-top:-170px">
                <div class="btn-group" role="group" aria-label="...">
                <a type="button" class="btn btn-primary" href="tel: +85212345678"><i class="fa fa-phone"></i> Call</a>
                <a type="button" class="btn btn-info"><i class="fa fa-skype"></i> Skype</a>
                <a type="button" class="btn btn-success" href="mailto:conFusion@food.net"><i class="fa fa-envelope-o"></i> Email</a>
                </div>
            </div>
        </div>

        <hr style="color:white">
        <div class="row" style="color:white">
           <div class="col-xs-12">
              <h3>Send us your Feedback</h3>
           </div>
            <div class="col-xs-12 col-sm-9">
                <br>
                <form class="form-horizontal" role="form" action="contact.php" method="post">
                <div class="form-group">
                    <label for="firstname" class="col-sm-2 control-label">First Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="firstname1" name="firstname1" placeholder="Enter First Name" width="500px">
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastname" class="col-sm-2 control-label">Last Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="lastname1" name="lastname1" placeholder="Enter Last Name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="telnum" class="col-sm-2 control-label">Contact Tel.</label>
                    <div class="col-xs-5 col-sm-4 col-md-3">
                        <div class="input-group">
                            <div class="input-group-addon">
                                (</div>
                            <input type="tel" class="form-control" id="areacode" name="areacode" placeholder="Area Code">
                            <div class="input-group-addon">)
                            </div>
                        </div>
                    </div>
                        <div class="col-xs-7 col-sm-6 col-md-7">
                            <input type="tel" class="form-control" id="telnum" name="telnum" placeholder="Tel. Number">
                    </div>
                </div>
                <div class="form-group">
                    <label for="emailid" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="emailid" name="emailid" placeholder="Email">
                    </div>
                </div>
                <div class="form-group">
                    <div class="checkbox col-sm-5 col-sm-offset-2">
                        <label class="checkbox-inline">
                            <input type="checkbox" name="approve" value="">
                            <strong>May we contact You?</strong>
                        </label>
                    </div>
                    <div class="col-sm-3 col-sm-offset-1">
                        <select class="form-control" name="select">
                            <option>Tel</option>
                            <option>Email</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="feedback" class="col-sm-2 control-label">Your Feedback</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="feedback" name="feedback" rows="12"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">Send Feedback</button>
                    </div>
                </div>
                </form>

            </div>
             <div class="col-xs-12 col-sm-3">
                <p style="padding:20px;"></p>
            </div>
       </div>
       <hr style="color:white; margin-top:10px">
    </div>

    <?php
    if(isset($_POST['firstname1']) && isset($_POST['lastname1']) && isset($_POST['areacode']) && isset($_POST['telnum']) && isset($_POST['emailid']) && isset($_POST['feedback']))
    {
            $firstname1 = $_POST['firstname1'];
            $lastname1 = $_POST['lastname1'];
            $areacode = $_POST['areacode'];
            $telnum = $_POST['telnum'];
            $email = $_POST['emailid'];
            $feedback = $_POST['feedback'];

            if(!empty($firstname1) && !empty($lastname1) && !empty($areacode) && !empty($telnum) && !empty($email) && !empty($feedback))
            {
                $to = 'notessharingsystem@gmail.com';
                $subject = 'Contact form submitted';
                $body = $feedback;
                $headers = 'From: '.$email;


                if(mail($to, $subject, $body, $headers))
                {
                    echo '<p style="color:white;font-size:16px">Thanks for contacting us.We\'ll be in touch with you soon.</p>';
                }
                else
                    echo 'Sorry, an error occurred. Please try again soon.';
            }

            else
                echo '<br><p style="padding:0px 0px 0px 50px; color:white">All Fields are required</p><br>';
    }

?>

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

        <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>

        <script type='text/javascript'>function init_map(){var myOptions = {zoom:16,center:new google.maps.LatLng(22.7248047,75.87139920000004),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(22.7248047,75.87139920000004)});infowindow = new google.maps.InfoWindow({content:'<strong>Map</strong><br>sgsits indore <br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
    </body>
</html>
