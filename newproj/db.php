<?php
$host="localhost";
$username="root";
$pword="";
$db="test";

$conn=new mysqli($host,$username,$pword,$db) or die(mysql_error());
if ($conn->connect_error) {
    die("Connection failed:".$conn->connect_error);
}else{

}


?>