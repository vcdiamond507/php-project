<?php
include("handlers/connection.php");
$bname= $_GET['bname'];
$brating= $_GET['brating'];
$bprice= $_GET['bprice'];
$order= $_GET['border'];
$like= $_GET['blike'];

 $sql= "INSERT INTO `brands` (`brand_name`, `rating_score`, `price_range`, `orders`, `people_love`) VALUES ('$bname', '$brating', '$bprice', '$order', '$like');";
 $result= mysqli_query($conn, $sql);
 echo("done");
 session_start();
 $_SESSION['add']="success";
 header("Location: admin-panel.php");

?>