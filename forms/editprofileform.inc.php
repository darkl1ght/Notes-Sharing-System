<?php
require 'connect.inc.php';

    if( isset($_POST['firstname'])&&isset($_POST['password'])&&isset($_POST['email'])&&isset($_POST['date'])&&isset($_POST['education'])&&isset($_POST['location'])&&isset($_POST['profession'])&&isset($_POST['skills'])&&isset($_POST['interest'])){
        $firstname= mysqli_real_escape_string($conn,$_POST['firstname']);
        $password=mysqli_real_escape_string($conn,md5($_POST['password']));
        $password_hash=md5($password);
        $email=mysqli_real_escape_string($conn,$_POST['email']);
        $date=mysqli_real_escape_string($conn,$_POST['date']);
        $profession=mysqli_real_escape_string($conn,$_POST['profession']);
        $location=mysqli_real_escape_string($conn,$_POST['location']);
        $skills=mysqli_real_escape_string($conn,$_POST['skills']);
        $education=mysqli_real_escape_string($conn,$_POST['education']);
        $interest=mysqli_real_escape_string($conn,$_POST['interest']);

        if(!empty($firstname) && !empty($password) && !empty($email) && !empty($date) && !empty($profession) &&!empty($location) && !empty($education) && !empty($skills) &&!empty($interest)){

                $query="SELECT `firstname`,`password`,`email`,`dob`,`profession`,`location`,`education`,`skills`,`interest` FROM `users` WHERE `firstname`='$firstname' && `password`='$password_hash' && `email`='$email' && `skills`='$skills' && `profession`='$profession' && `location`='$location'&& `education`='$education' && `dob`='$date' ";
                $query_run=mysqli_query($conn,$query);
                if(@mysqli_num_rows($query_run)==1){
                    echo "<h4>Enter a different value.</h4><br>";
                }
                else{
                    $query ="UPDATE `users` SET `firstname` = '$firstname', `password` = '$password', `email` = '$email', `dob` = '$date', `skills` = '$skills', `profession`= '$profession', `location` = '$location', `education` = '$education', `interest` = '$interest' WHERE `users`.`id` = '".$_SESSION['user_id']."' ";
                    if($query_run = mysqli_query($conn,$query)){
                       echo "Changed Profile Successfully<br>";
                    }
                    else{
                        echo "<h4>Sorry We couldn't save your data at this time. Try again Later</h4><br>";
                    }
                }
            }
        else{
            echo "<h4>All fields are required.</h4><br>";
        }
    }
?>
            <form action="editprofile.php" method="POST">
                <span style="color:white;font-size:18px">Name </span>
                <span style="padding:0px 0px 0px 85px">
                    <input type="text" id="firstname" name="firstname" maxlength="30    " placeholder=" First Name" class="width2" value="<?php if(isset($firstname)){echo $firstname;} ?>">
                </span>
                <br>
                <br>
                <span style="color:white;font-size:18px">Password  </span>
                <span style="padding:0px 0px 0px 55px">
                    <input type="password" id="password" maxlength="30" name="password" placeholder=" Password" class="width2">
                </span>
                <br>
                <br>
                <span style="color:white;font-size:18px">Email  </span>
                <span style="padding:0px 0px 0px 90px">
                    <input type="email" id="email" name="email" maxlength="50" placeholder=" E-mail" class="width2" value="<?php if(isset($email)){echo $email;} ?>">
                </span>
                <br>
                <br>
                <span style="color:white;font-size:18px">Date of Birth  </span>
                <span style="padding:0px 0px 0px 35px">
                    <input type="date" id="date" maxlength="10" name="date" class="width2" value="<?php if(isset($date)){echo $date;} ?>">
                </span>
                <br>
                <br>
                <span style="color:white;font-size:18px">Profession  </span>
                <span style="padding:0px 0px 0px 50px">
                    <input type="text" id="profession" name="profession" maxlength="15" placeholder=" Profession" class="width2" value="<?php if(isset($profession)){echo $profession;} ?>">
                </span>
                <br>
                <br>
                <span style="color:white;font-size:18px">Location  </span>
                <span style="padding:0px 0px 0px 67px">
                    <input type="text" id="location" name="location" maxlength="15" placeholder=" Location" class="width2" value="<?php if(isset($location)){echo $location;} ?>">
                </span>
                <br>
                <br>
                <span style="color:white;font-size:18px">Education  </span>
                <span style="padding:0px 0px 0px 55px">
                    <input type="text" id="education" name="education" placeholder=" Education" maxlength="15" class="width2" value="<?php if(isset($education)){echo $education;} ?>">
                </span>
                <br>
                <br>
                <span style="color:white;font-size:18px">Skills  </span>
                <span style="padding:0px 0px 0px 93px">
                    <input type="text" id="skills" name="skills" placeholder=" Skills" class="width2" maxlength="30" value="<?php if(isset($skills)){echo $skills;} ?>">
                </span>
                <br>
                <br>
                <span style="color:white;font-size:18px">Interests  </span>
                <span style="padding:0px 0px 0px 65px">
                    <input type="text" id="interest" name="interest" maxlength="30" placeholder=" Interests" class="width2" value="<?php if(isset($interest)){echo $interest;} ?>">
                </span>
                <br>
                <br>
                <span style="padding: 0px 0px 0px 50px"></span>
                <button type="button" class="btn btn-success" value="Change Profile Picture" onclick="window.location='upload.php'">
                    Change Profile Picture
                </button>
                <span style="padding: 0px 0px 0px 10px"></span>
                <button type="submit" class="btn btn-success" name="submit" value="Upload" id="submit">Submit</button>
                <span style="padding: 0px 0px 0px 10px"></span>
                <button type="button" class="btn btn-danger" value="cancel" onclick="window.location='profilepage.php'">Cancel</button>
            </form>
