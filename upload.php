                    <!DOCTYPE html>
                    <html>
                    <head>
                        <title>Upload Profile Picture</title>
                        <link href="css/mystyles.css" rel="stylesheet">
                    </head>
                    <body>
                    <span>Upload Profile Picture here.<br></span>
                    <span>Image Size must be less than 2MB.<br></span>
<?php
require 'core.inc.php';
if(isset($_POST['submit']))
{
    $name = $_FILES['file']['name'];
    $extension = strtolower(substr($name, strpos($name,'.')+1));
    $type = $_FILES['file']['type'];
    $tmp_name= $_FILES['file']['tmp_name'];
    if(isset($name))
    {
        if(!empty($name))
        {
            if(($extension=='jpg'||$extension=='jpeg') && $type =='image/jpeg')
            {
                $location='uploads/';
                if(move_uploaded_file($tmp_name, $location.$name))
                {
                    $query = "UPDATE `users` SET `propic` = '$location$name' WHERE `users`.`id` = '".$_SESSION['user_id']."' ";
                    if($query_run = mysqli_query($conn,$query)){
                    echo "File Uploaded Sucessfully.";
                    echo '<a href="editprofile.php">Click here to go back.</a>';
                    }
                    else{
                        echo "<h4>Sorry We couldn't save your data at this time. Try again Later</h4><br>";
                    }

                }
                else{
                    echo "There was an error.";
                }
            }
            else{
                echo "The file must be a jpg/jpeg image.";
           }
        }
        else {
            echo "Please Choose a File.";
        }
    }
}
?>
                <form action="upload.php" method="POST" enctype="multipart/form-data" id="upload" class="form-inline">
                <input type="file" name="file" id="file" value="Upload" style="margin-top:0px;margin-left:0px">
                <br>
                <button type="submit" class="btn btn-success" name="submit" value="Upload" id="submit">Submit</button>
                <span style="padding: 0px 0px 0px 10px"></span>
                <button type="button" onclick="window.location='profilepage.php'" class="btn btn-danger" id="cancel">Cancel</button>
                </form>
</body>
<!--
<input type="file" name="file" id="file" value="Upload" style="margin-top:-23px;margin-left:139px">
                <br>-->
</html>
