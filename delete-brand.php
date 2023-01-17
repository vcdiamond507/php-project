<?php
include("handlers/connection.php");
$bname= $_GET['bname'];
$sql= "DELETE FROM brands WHERE brand_name = '$bname'";
$result= mysqli_query($conn, $sql);
session_start();
$_SESSION['delete']="success";
header("Location: admin-panel.php");

?>