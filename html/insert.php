<?php
require 'config.php';

$doctorName=$_POST['doctorName'];
$specialization=$_POST['specialization'];
$username=$_POST['username'];
$phone_no=$_POST['phone_no'];
$date=$_POST['date'];



insertData($doctorName,$specialization,$username,$phone_no,$date);

function insertData($doctorName,$specialization,$username,$phone_no,$date)
{
global $config;
$sql ="INSERT INTO appointment(doctorName,specialization,username,phone_no,date) VALUES('$doctorName','$specialization','$username','$phone_no','$date')";
if($config->query($sql))
{
    header("location:index.php");
}else{
    echo "Error:".$config->error;
}


}
?>