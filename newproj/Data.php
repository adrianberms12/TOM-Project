<?php
include_once('db.php');

$posted=$_POST['posted'];
$tas=$_POST['tas'];
$Needed=$_POST['Needed'];
$created=$_POST['created'];
$Assigned=$_POST['Assigned'];
$rate=$_POST['rate'];
$note=$__POST['note'];
$e_id=$_POST['id'];



if($e_id == ""){

$queryl ="INSERT INTO tasklist(`posted`,`tas`, `Needed`, `created`,`note`,`Assigned`,`rate`,`id`)
VALUES(NOW(),'$tas','$Needed','$created','$Assigned','$note','$rate','$e_id')";

if($conn->query($queryl)) {
    echo "<script>alert('Welcome!');window.location='tadminview.php'</script>";
    }else{
    echo "<script>alert('invalid!')</script>";
    }

}else {
    $queryupdt = "UPDATE `tasklist` SET `posted`='$posted',`tas`='$tas',`Needed`='$Needed',`created`='$created',`Assigned`='$Assigned',`rate`='$rate' WHERE `id`='$e_id'";

    if($conn->query($queryupdt)){
       echo"<script>alert('Successfully edit!'); window.location='tadminview.php'</script>";
        
      
       }else {
        //  echo "<script>alert('Failed to register!')</script>";
       }
    }

?>