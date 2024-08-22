<?php
include_once'db.php';

$e_id=$_GET["id"];

$sql= "DELETE from `tasklist` WHERE `id`='$e_id' ";

if($conn->query($sql))
{
    echo "<script type='text/javascript'> alert('Successfully Deleted.');window.location = 'tadminview.php'</script>";
}else
{echo"error".$conn->error;}

?>