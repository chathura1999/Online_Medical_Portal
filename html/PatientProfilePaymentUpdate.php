<?php
if(isset($_POST['PayUpdate'])){
    include 'config.php';
    session_start();

    $Card_type=$_POST['Card_type'];
    $email=$_POST['email'];
    $Cnum=$_POST['Cnum'];
    $Edate=$_POST['Edate'];
    $id=$_POST['id'];

    $sql="UPDATE payment SET card_type='$Card_type',email='$email',card_num='$Cnum',expire_date='$Edate' WHERE id= '$id'";
    $result=mysqli_query($config,$sql);

    if($result==true){
        header("location:Patient.php");
       
        }
        else{
        echo "Faild";
        }
}


?>