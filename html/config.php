<?php
$host ='localhost';
$username ='root';
$db="onlinemedicalportal";

$config=new mysqli($host,$username,'',$db);

if($config->connect_error){
    die("Connection failed".$config->connection_error);
}
else{
   // echo "<script>alert('Connected suces');</script>";
}
?>