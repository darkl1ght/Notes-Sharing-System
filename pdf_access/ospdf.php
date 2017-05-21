<?php
$query="SELECT `users`.`id`, `pdffile`.`subject_id`, `users`.`firstname`, `pdffile`.`pdflocation`,`pdffile`.`pdftopic` FROM `users` LEFT JOIN `pdffile` ON `users`.`id`=`pdffile`.`people_id`";
if($query_run=mysqli_query($conn,$query)){
    while($row=mysqli_fetch_assoc($query_run)){
        if($row['subject_id']=='2'){
            echo '<a href="'.$row["pdflocation"].'" style="color:white; padding:0px 0px 0px 15px;font-size:18px">'.$row["pdftopic"].'<br></a>';
        }
    }
}
else{
echo "No data to display.";
}
?>
