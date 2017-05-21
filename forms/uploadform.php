<?php

if(isset($_POST['submit']))
{
    $name = $_FILES['file']['name'];
    $extension = strtolower(substr($name, strpos($name,'.')+1));
    $type = $_FILES['file']['type'];
    $tmp_name= $_FILES['file']['tmp_name'];
    $user_id2=$_SESSION['user_id'];
    $pdf_topic=mysqli_real_escape_string($conn,$_POST['pdf_topic']);
    $subject_id=mysqli_real_escape_string($conn,$_POST['subject_id']);
    if(isset($name) && isset($pdf_topic) && isset($subject_id))
    {
        if(!empty($name)&&!empty($pdf_topic)&&!empty($subject_id))
        {
            if($extension=='pdf' && $type =='application/pdf')
            {
                $location='pdfstore/';
                if(move_uploaded_file($tmp_name, $location.$name))
                {
                    $query = "INSERT INTO `pdffile` VALUES('', '$user_id2', '$subject_id', '$location$name', '$pdf_topic') ";
                    if($query_run = mysqli_query($conn,$query)){
                    echo "<span style='color: black'>File Added Sucessfully.</span>";
                    echo '<a href="profilepage.php" style="color: red;">Click here to go back.</a>';
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
                echo "The file must be a pdf file(<2MB).";
           }
        }
        else {
            echo "Please Fill all the fields.";
        }
    }
}
?>
                <form action="profilepage.php" method="POST" enctype="multipart/form-data" id="upload" class="form-inline">
                    <span style="color: black;">
                    Name  <input type="text" name="pdf_topic" id="pdf_topic" placeholder="Enter name of the topic." style="color:black; background-color: lightgreen"><br>
                    Choose a code for the subject.<br>
                    Enter 1 for Computer Networks.<br>
                    Enter 2 for Operating System.<br>
                    Enter 3 for Software Engineering.<br>
                    Enter 4 for Principles of Managament.<br>
                    Enter 5 for Automata Theory.<br>
                    </span>
                    <input type="text" name="subject_id" id="subject_id" placeholder="Enter Subject Code." style="color:black; background-color: lightgreen">
                    <input type="file" name="file" id="file" value="Upload"><br>
                    <button type="submit" class="btn btn-success" name="submit" value="Upload" id="submit">Upload</button>
                    <span style="padding: 0px 0px 0px 10px"></span>
                    <button type="button" onclick="window.location='profilepage.php'" class="btn btn-danger" id="cancel">Cancel</button>
                </form>
