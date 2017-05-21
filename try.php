<?php
require 'connect.inc.php';
$query="SELECT `users`.`id`,`users`.`firstname`, `pdffile`.`pdflocation`,`pdffile`.`pdftopic` FROM `users` LEFT JOIN `pdffile` ON `users`.`id`=`pdffile`.`people_id`";
    if($query_run=mysqli_query($conn,$query)){
        while($row=mysqli_fetch_assoc($query_run)){
            if($row['id']=='9'){
            echo '<a href="'.$row["pdflocation"].'">'.$row["pdftopic"].'<br></a>';
            }
        }
    }
else{
    echo "No data to display.";
}
?>