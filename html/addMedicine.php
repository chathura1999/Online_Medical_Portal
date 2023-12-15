<?php
require 'config.php';


$name=$_POST['name'];
$Email=$_POST['Email'];

$medicinData=$_POST['medicinData'];
$ADDRESS=$_POST['ADDRESS'];


insertData($name,$Email,$medicinData,$ADDRESS);

function insertData($name,$Email,$medicinData,$ADDRESS)
{
global $config;
$sql ="INSERT INTO medicine(name,email,med_data,address) VALUES('$name','$Email','$medicinData','$ADDRESS')";
if($config->query($sql))
{
    header("location:Medicine.php");
}else{
    echo "Error:".$config->error;
}


}
?>