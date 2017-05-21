<!DOCTYPE html>
<?php
require 'connect.inc.php';
require 'core.inc.php';
?>
<?php
if(loggedin()){
    echo 'You\'re logged in!';
}
else{
    header('Location: index.php');
}
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
<style>
    .input[type=text] {
    width: 130px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
    margin-bottom: 3px;
}

/* When the input field gets focus, change its width to 100% */
input[type=text]:focus {
    width: 100%;
}
</style>
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
		<ul class="nav navbar-nav" id="navbar">
			<li id="nav_image" style="padding:18px 0px 10px 0px">
			<a href="index.php" style="padding:4px" id="nav_text">
                <img src="Screenshot/note2.png" width="25" height="25" alt="Notes_Share_note2">
                <span style="font-size:17px; color:white"> Notes-Share </span>
			</a>
			</li>
            <li style="padding:20px 0px 3px 10px">
                <input style="width:350px" type="text" name="search" placeholder="  Search.." height="5px">
            </li>
            <li style="padding:20px">
                <span style="margin-left:-16px;margin-bottom:20px">
                    <button type="submit" class="btn btn-primary" style="padding:3px 5px 0px 5px;border-radius:0px">
                        <i class="glyphicon glyphicon-search" style="color:white">
                        </i>
                    </button>
                </span>
            </li>
            <li style="padding:9px 0px 0px 200px">
            <a href="profilepage.php">
                <span style="color:white;font-size:14px">
                    <button style="background:black;border-style: hidden">
                        <img src="<?php echo getuserfield('propic'); ?>" height="26px" width="25px">
<?php
                        echo getuserfield('firstname');
?>
                    </button>
                </span>
            </a>
            </li>
            <li style="padding:10px 0px 0px 8px">
                <a href="index.php">
                    <span class="glyphicon glyphicon-home" aria-hidden="true" style="color:white">
                    </span>
                    <span style="color:white" > Home</span>
                </a>
            </li>
            <li style="padding:6px 0px 0px 9px">
                <a href="logout.php"><button class="btn btn-danger"><span style="color:white;font-size:14px"><i class="glyphicon glyphicon-off"></i><span style="color:white"> Logout</span></span></button></a>
            </li>
		</ul>
	</div>
	</nav>
    <div >
        <div style=" margin-left:18px; margin-right:18px; margin-top:-4px;">
            <ol class="breadcrumb">
                <li class="active" style="padding:0px 0px 0px 15px"><a href="index.php">Home</a></li>
                <li class="active" ><a href="profilepage.php">Profile</a></li>
                <li >Edit Profile</li>
            </ol>
        </div>
         <div>
             <h3 style="color:white;padding:0px 0px 0px 25px">Edit Profile</h3>
             <hr>
         </div>
    </div>
    <div class="container" style="align-content:center;">
        <div class="col-sm-12">
            <p class="grad_profile" style="margin-left:0px;"></p>
            <hr style="color:white">
            <p class="grad_profile" style="margin-left:1110px"></p>
            <div id="form" id="signup2" style="padding:0px 0px 0px 370px">


                <?php
                require 'forms/editprofileform.inc.php';
                ?>


            </div>
            <hr style="color:white">
        </div>
    </div>


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
				<i class="fa fa-phone"></i> Tel.: +91 8085519964<br>
				<i class="fa fa-fax"></i> Fax: +852 8765 4321<br>
				<i class="fa fa-envelope"></i> Email: <a href="https://accounts.google.com/ServiceLogin?sacu=1&scc=1&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F%3Ftab%3Dwm&hl=en&service=mail#identifier">vinay.badhan21@gmail.com</a><br>
				<a href="https://accounts.google.com/ServiceLogin?sacu=1&scc=1&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F%3Ftab%3Dwm&hl=en&service=mail#identifier">ayoushchauhan1996@gmail.com</a>
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
				<!--Â-->
				© Copyright 2016 Notes Sharing System
			</p>
		</div>
	</div>
</div>
</footer>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed-->
<script src="js/bootstrap.min.js"></script>
</body>
</html>
