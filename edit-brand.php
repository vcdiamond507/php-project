<?php
include("handlers/connection.php");
$bname= $_GET['bname'];
$brating= $_GET['brating'];
$bprice= $_GET['bprice'];
$order= $_GET['border'];
$like= $_GET['blike'];
 $sql= "UPDATE `brands` SET `brand_name` = '$bname', `rating_score` = '$brating', `price_range` = '$bprice', `orders` = '$order', `people_love` = '$like'  WHERE `brand_name` = '$bname'";
 $result= mysqli_query($conn, $sql);
 echo("done");
 session_start();
 $_SESSION['edit']="success";
 header("Location: admin-panel.php");

?>