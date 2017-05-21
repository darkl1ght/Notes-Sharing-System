<?php

if(isset($_POST['email'])&&isset($_POST['password'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $password_hash=md5($password);

    if(!empty($email) && !empty($password)){
        $query="SELECT `id` FROM `users`  WHERE `email`='".mysqli_real_escape_string($conn,$email)."' AND `password`='".mysqli_real_escape_string($conn,$password_hash)."'";
        if($query_run=mysqli_query($conn,$query)){
            $query_num_rows=mysqli_num_rows($query_run);
            if($query_num_rows==0){
                echo 'Invalid email/password combination.';
            }
            else if($query_num_rows==1){

                $user_id=mysql_result($query_run,0,'id');
                $_SESSION['user_id']=$user_id;
                header('Location: profilepage.php');
            }
        }
    }
    else{
        echo 'You must submit an e-mail and a password.';
    }
}
?>
                        <form action="<?php echo $current_file;?>" method="POST" class="form-inline">
                            <div class="form-group" style="padding:10px">
                                <input type="text" class="form-control" id="email" placeholder="Email" name="email">
                            </div>
                            <div class="form-group" >
                                <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                            </div>
                            <!--<span style="padding:0px 0px 0px 140px"></span>-->
                            <button type="submit" class="btn btn-primary" value="Sign in"> Sign in</button>
                            <button type="button" class="btn btn-danger btn-md" data-dismiss="modal">Cancel</button>
                        </form>