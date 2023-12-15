<?php
require 'config.php';

$doctorName=$_POST['doctorName'];
$doctorPassword=$_POST['doctorPassword'];
$userType=$_POST['userType'];
$doctorDate=$_POST['doctorDate'];
$doctorMobileN=$_POST['doctorMobileN'];


insertData($doctorName,$doctorPassword,$userType,$doctorDate,$doctorMobileN);

function insertData($doctorName,$doctorPassword,$userType,$doctorDate,$doctorMobileN)
{
global $config;
$sql ="INSERT INTO users(username,password,user_type,created,phone_no) VALUES('$doctorName','$doctorPassword','$userType','$doctorDate','$doctorMobileN')";
if($config->query($sql))
{
    header("location:MedicalOfficerAddDOC.php");
}else{
    echo "Error:".$config->error;
}


}
?>