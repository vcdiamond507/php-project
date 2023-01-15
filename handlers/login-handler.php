<?php
include('connection.php');


$fusername= $_GET['user-id'];
$fuserpass= $_GET['user-pass'];

$sql = "SELECT * FROM `user-login-data` where user_id= '$fusername'";
$result = mysqli_query($conn, $sql);  
$row = mysqli_num_rows($result);
$output = mysqli_fetch_assoc($result);
  $susername = $output['user_name'];
  $suserpass = $output['user_pass'];
  $suserdate = $output['timespan'];
if($row<1)
{
    session_start();
    $_SESSION['login']="noid";
    header("Location: http://localhost/php-project/login.php");
}
else
{
    if($fuserpass == $suserpass)
    {
        session_start();
        $_SESSION['login']="success";
        $_SESSION['username']="$susername";
        $_SESSION['userdate']="$suserdate";
        header("Location: http://localhost/php-project/index.php");
        
    }
    else
    {
        session_start();
        $_SESSION['login']="nopass";
        header("Location: http://localhost/php-project/login.php");
    }
}




?>