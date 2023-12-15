<?php
if(isset($_POST['MedUpdate'])){
    include 'config.php';
    session_start();

    $med_data=$_POST['med_data'];
    $address=$_POST['address'];
    $email=$_POST['email'];
    $id=$_POST['id'];
   
    

    $sql="UPDATE medicine SET med_data='$med_data',address= '$address',email='$email' WHERE id='$id'";
    $result=mysqli_query($config,$sql);

    if($result==true){
        header("location:Medicine.php");
       
        }
        else{
        echo "Faild";
        }
}


?>