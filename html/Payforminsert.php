<?php
require 'config.php';

$firstName=$_POST['firstName'];
$lastName=$_POST['lastName'];
$address=$_POST['address'];
$idNumV=$_POST['idNumV'];
$email=$_POST['email'];
$contactNum=$_POST['contactNum'];
$Cardtype=$_POST['Cardtype'];
$cardNum=$_POST['cardNum'];
$ExpiaryDate=$_POST['ExpiaryDate'];


insertData($firstName,$lastName,$address,$idNumV,$email,$contactNum,$Cardtype,$cardNum,$ExpiaryDate);

function insertData($firstName,$lastName,$address,$idNumV,$email,$contactNum,$Cardtype,$cardNum,$ExpiaryDate)
{
global $config;
$sql ="INSERT INTO payment(username,Lname,address,id,email,phone_num,card_type,card_num,expire_date) VALUES('$firstName','$lastName','$address','$idNumV','$email','$contactNum','$Cardtype','$cardNum','$ExpiaryDate')";
if($config->query($sql))
{
    echo "<script>alert('same message');</script>";
    header("location:index.php");
    
}else{
    echo "Error:".$config->error;
}


}
?>