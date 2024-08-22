<?php
include_once("db.php");

$e_id = $_GET['id'];
$rate = $_GET['rate'];
$queryupdt = "UPDATE `tasklist` SET rate=$rate WHERE id=$e_id";
mysqli_query($conn,$queryupdt);
header('location:tadminview.php')




?>