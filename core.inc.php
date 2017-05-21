<?php
ob_start();
session_start();
require 'connect.inc.php';
$current_file=$_SERVER['SCRIPT_NAME'];
if(isset($_SERVER['HTTP_REFERER'])&&!empty($_SERVER['HTTP_REFERER'])){
$http_referer=$_SERVER['HTTP_REFERER'];
}
function loggedin(){
    if(isset($_SESSION['user_id'])&&!empty($_SESSION['user_id'])){
        return true;
    }
    else{
        return false;
    }
}
function mysql_result($query_run, $number, $field=0) {
                    mysqli_data_seek($query_run, $number);
                    $row = mysqli_fetch_array($query_run);
                    return $row[$field];
                }

function getuserfield($field){
    $query = "SELECT `$field` FROM `users` WHERE `id`='".$_SESSION['user_id']." ' ";
    global $conn;
    if($query_run=mysqli_query($conn,$query))
    {
        if($query_result = mysql_result($query_run, 0, $field)){
            return $query_result;
        }
    }
}
?>