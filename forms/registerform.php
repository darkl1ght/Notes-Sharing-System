<?php
require 'connect.inc.php';
    if( isset($_POST['firstname'])&&
        isset($_POST['lastname'])&&
        isset($_POST['password'])&&
        isset($_POST['password_again'])&&
        isset($_POST['email'])&&
        isset($_POST['date'])
        ){
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $password=$_POST['password'];
        $password_hash=md5($password);
        $password_again=$_POST['password_again'];
        $email=$_POST['email'];
        $date=$_POST['date'];
        if(!empty($firstname) && !empty($lastname) && !empty($password_again) && !empty($password) && !empty($email) && !empty($date)){
            if($password!=$password_again){
                echo '<h4>Passwords do not match.</h4><br>';
            }else{
                $query="SELECT `email` FROM `users` WHERE `email`='$email'";
                $query_run=mysqli_query($conn,$query);
                if(@mysqli_num_rows($query_run)==1){
                    echo "<h4>User already exist.</h4><br>";
                }
                else{
                    $query = "INSERT INTO `users` VALUES ('','".mysqli_real_escape_string($conn,$firstname)."','".mysqli_real_escape_string($conn,$lastname)."','".mysqli_real_escape_string($conn,md5($password))."','".mysqli_real_escape_string($conn,$email)."','".mysqli_real_escape_string($conn,$date)."','".mysqli_real_escape_string($conn,'Student')."','".mysqli_real_escape_string($conn,'Indore')."','".mysqli_real_escape_string($conn,'Under-graduate')."','','','uploads/default.png')";
                    if($query_run = mysqli_query($conn,$query)){
                        echo "You are registered Succesfully";
                    }
                    else{
                        echo "<h4>Sorry We couldn't register you at this time. Try again Later</h4><br>";
                    }
                }
            }
        }
        else{
            echo "<h4>All fields are required.</h4><br>";
        }
    }
    #<?php echo $current_file;
?>
                    <p id="signup_font" >Sign Up</p>
                    <br>
                    <form action="index.php" method="POST">

                        <input type="text" id="firstname" name="firstname" placeholder="First Name" style="border-radius:5px;" class="width3" maxlength="30" value="<?php if(isset($firstname)){echo $firstname; }?>">   <input type="text" id="lastname" name="lastname" style="border-radius:5px;" class="width3" value="<?php if(isset($lastname)){echo $lastname;} ?>" placeholder="Last Name" maxlength="30">
                        <br>
                        <br>
                        <input type="password" id="password" name="password" placeholder="Password" class="width2" style="border-radius:5px;" maxlength="30">
                        <br>
                        <br>
                        <input type="password" id="password_again" name="password_again" placeholder="Re-enter Password" class="width2" style="border-radius:5px;" maxlength="30">
                        <br>
                        <br>
                        <input type="email" id="email" name="email" placeholder="E-mail" class="width2" style="border-radius:5px;" value="<?php if(isset($email)){echo $email;} ?>" maxlength="50">
                        <br>
                        <br>
                        <input type="date" id="date" name="date" class="width2" placeholder="Date of Birth(dd/mm/yyyy)" style="border-radius:5px;" value="<?php if(isset($date)){echo $date;} ?>" maxlength="30">
                        <br>
                        <br>
                        <button type="submit" class="btn btn-primary" id="signup_btn">Sign Up</button>
                    </form>
<?php

?>