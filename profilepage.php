<!DOCTYPE html>
<?php
require 'connect.inc.php';
require 'core.inc.php';

if(!loggedin()){
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
			<li id="nav_image" style="padding:17px 0px 0px 0px">
			<a href="index.php" style="padding:4px" id="nav_text">
                <img src="Screenshot/note2.png" width="25" height="25" alt="Notes_Share_note2">
                <span style="font-size:17px; color:white"> Notes-Share </span>
			</a>
			</li>
            <li style="padding:19px 0px 3px 10px">
                <input style="width:300px" type="text" name="search" placeholder="  Search.." height="5px">
            </li>
            <li style="padding:19px 0px">
                <span style="margin-left:-16px;margin-bottom:20px">
                    <button type="submit" class="btn btn-primary" style="padding:3px 5px 0px 5px;border-radius:0px">
                        <i class="glyphicon glyphicon-search" style="color:white">
                        </i>
                    </button>
                </span>
            </li>
            <li style="padding:4px 0px 0px 310px">
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
            <li style="padding:6px 0px 0px 8px">
                <a href="index.php">
                    <span class="glyphicon glyphicon-home" aria-hidden="true" style="color:white">
                    </span>
                    <span style="color:white" > Home</span>
                </a>
            </li>
            <li style="padding:0px">
                <a href="logout.php"><button class="btn btn-danger"><span style="color:white; font-size:14px"><i class="glyphicon glyphicon-off"></i> Logout</button></span></a>
            </li>
		</ul>
	</div>
	</nav>

    <div style="padding:10px; margin-left:18px; margin-right:18px; margin-top:0px;">
        <div >
            <ol class="breadcrumb">
                <li class="active" style="padding:0px 0px 0px 10px"><a href="index.php">Home</a></li>
                <li>Profile</li>
            </ol>
        </div>
         <div>
             <h3 style="color:white;padding:0px 0px 0px 25px">Profile</h3>
             <hr>
         </div>
    </div>
    <div class="container">
        <div class="col-sm-3">
            <div class="row">
                <hr style="color:white">
                <p class="grad_profile1"></p>
                <p class="grad_profile1" style="margin-left:0px"></p>
                <img src="<?php echo getuserfield('propic'); ?>" width="280px" height="250px" style="align:center;padding:0px 0px 0px 7px">
                <br>
                <br>
                <span style="color:white;font-size:18px;padding:0px 0px 0px 15px">
                <?php
                echo (getuserfield('firstname').' '.getuserfield('lastname'));
                ?>
                <br></span>
                <span style="color:white;font-size:18px;padding:0px 0px 0px 15px">
                <?php
                echo (getuserfield('profession'));
                ?>
                </span>
                <br>
                <span style="color:white;font-size:18px;padding:0px 0px 0px 15px">
                <?php
                echo (getuserfield('location'));
                ?>
                </span>
                <br>
                <hr style="color:white">
                <span style="padding:0px 0px 0px 70px"><a href="editprofile.php"><button type="submit" class="btn btn-success">Edit My Profile <i class="glyphicon glyphicon-pencil" style="color:white"></i></button></a></span>
                <!--
                <a data-toggle="modal" data-target="#ProfilePicModal" id="log"><button class="btn btn-warning"><span class="glyphicon glyphicon-pencil" style="color:white"></span><span style="color:white"> Login</span></button></span>
                </a>-->
                <br>
                <hr style="color:white">
                <span style="color:white;font-size:18px;padding:0px 0px 0px 15px">About</span>
                <br>
                <span style="color:white;font-size:18px;padding:0px 0px 0px 15px">
                <?php
                echo (getuserfield('education'));
                ?>
                </span>
                <br>
                <span style="color:white;font-size:18px;padding:0px 0px 0px 15px">
                <?php
                echo (getuserfield('skills'));
                ?>
                </span>
                <br>
                <span style="color:white;font-size:18px;padding:0px 0px 0px 15px">
                <?php
                echo (getuserfield('interest'));
                ?>
                </span>
                <hr style="color:white;">
            </div>
        </div>
        <div class="col-sm-9">
            <p class="grad_profile1" style="margin-left:0px;margin-top:0px"></p>
            <hr style="color:white; margin-top:20px">
            <p class="grad_profile1" style="margin-left:825px"></p>
            <span style="color:white;padding:0px 0px 0px 15px;font-size:18px">My Notes
                <span style="padding:0px 0px 0px 636px">



                <a data-toggle="modal" data-target="#uploadcontent" id="upload"><button type="submit" class="btn btn-warning">Upload</button></a>
                <div id="uploadcontent" class="modal fade modal-admin" role="dialog">
                    <div class="modal-dialog">
                <!-- Modal Content -->
                    </div>
                    <div class="modal-content">
                        <div class="modal-header" style="background-color: darkgreen">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Upload</h4>
                        </div>
                        <div class="modal-body" style="background-color:lightgreen">

<?php
require 'forms/uploadform.php';
?>


                        </div>
                    </div>
                </div>

                </span>
            </span>

            <hr style="color:white">
            <span style="color:white;padding:0px 0px 0px 15px;font-size:18px">Notes Uploaded</span>
            <?php

            $query="SELECT `users`.`id`, `users`.`firstname`, `pdffile`.`pdflocation`,`pdffile`.`pdftopic` FROM `users` LEFT JOIN `pdffile` ON `users`.`id`=`pdffile`.`people_id`";
                if($query_run=mysqli_query($conn,$query)){
                    while($row=mysqli_fetch_assoc($query_run)){
                        if($row['id']==$_SESSION['user_id'])
                        echo '<br><br><a href="'.$row["pdflocation"].'" style="color:white; padding:0px 0px 0px 15px;font-size:18px">'.$row["pdftopic"].'<br></a>';
                    }
                }
            else{
                echo "No data to display.";
            }
            ?>
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
            <hr style="color:white">
            <span style="color:white;padding:0px 0px 0px 15px;font-size:18px">Subjects</span>
            <span style="color:white;padding:0px 0px 0px 15px">
                <br>
                <a data-toggle="modal" data-target="#viewcn" id="upload">
                <img src="Screenshot/cn.jpg" style="padding:0px 0px 0px 12px" height="120px" width="160px">
                </a>
                <div id="viewcn" class="modal fade modal-admin" role="dialog">
                    <div class="modal-dialog">
                <!-- Modal Content -->
                    </div>
                    <div class="modal-content">
                        <div class="modal-header" style="background-color: darkgreen">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Upload</h4>
                        </div>
                        <div class="modal-body" style="background-color:lightgreen">
<?php
require 'pdf_access/cnpdf.php';
?>
                        </div>
                    </div>
                </div>
                <a data-toggle="modal" data-target="#viewos" id="upload">
                <img src="Screenshot/os.png" style="padding:0px 0px 0px 20px" height="120px" width="160px" >
                </a>

                <div id="viewos" class="modal fade modal-admin" role="dialog">
                    <div class="modal-dialog">
                <!-- Modal Content -->
                    </div>
                    <div class="modal-content">
                        <div class="modal-header" style="background-color: darkblue">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Upload</h4>
                        </div>
                        <div class="modal-body" style="background-color:lightblue">
<?php
require 'pdf_access/ospdf.php';
?>
                        </div>
                    </div>
                </div>
                <a data-toggle="modal" data-target="#viewse" id="upload">
                <img src="Screenshot/se.jpg" style="padding:0px 0px 0px 20px" height="120px" width="160px">
                </a>
                <div id="viewse" class="modal fade modal-admin" role="dialog">
                    <div class="modal-dialog">
                <!-- Modal Content -->
                    </div>
                    <div class="modal-content">
                        <div class="modal-header" style="background-color: darkred">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Upload</h4>
                        </div>
                        <div class="modal-body" style="background-color:lightpink">
<?php
require 'pdf_access/sepdf.php';
?>
                        </div>
                    </div>
                </div>
                <a data-toggle="modal" data-target="#viewim" id="upload">
                <img src="Screenshot/im.jpg" style="padding:0px 0px 0px 20px" height="120px" width="160px">
                </a>
                <div id="viewim" class="modal fade modal-admin" role="dialog">
                    <div class="modal-dialog">
                <!-- Modal Content -->
                    </div>
                    <div class="modal-content">
                        <div class="modal-header" style="background-color: darkorange">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Upload</h4>
                        </div>
                        <div class="modal-body" style="background-color:lightpink">
<?php
require 'pdf_access/impdf.php';
?>
                        </div>
                    </div>
                </div>
                <a data-toggle="modal" data-target="#viewtoc" id="upload">
                <img src="Screenshot/toc.jpg" style="padding:0px 0px 0px 20px" height="120px" width="160px">
                </a>
                <div id="viewtoc" class="modal fade modal-admin" role="dialog">
                    <div class="modal-dialog">
                <!-- Modal Content -->
                    </div>
                    <div class="modal-content">
                        <div class="modal-header" style="background-color: darkviolet">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Upload</h4>
                        </div>
                        <div class="modal-body" style="background-color:brown">
<?php
require 'pdf_access/tocpdf.php';
?>
                        </div>
                    </div>
                </div>
            </span>
            <span style="color:white;padding:0px 0px 0px 22px">
                Computer Networks
            </span>
            <span style="color:white;padding:0px 0px 0px 45px">
                Operating System
            </span>
            <span style="color:white;padding:0px 0px 0px 34px">
                Software Engineering
            </span>
            <span style="color:white;padding:0px 0px 0px 11px">
                Principles of Management
            </span>
            <span style="color:white;padding:0px 0px 0px 19px">
                Automata Theory
            </span>
            <br>
            <br>
            <hr style="color:white;margin-top:15px">
            <br>
        </div>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed-->
<script src="js/bootstrap.min.js"></script>
</body>
</html>