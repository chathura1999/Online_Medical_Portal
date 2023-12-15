<?php
if(isset($_POST['DocDelete'])){
    include 'config.php';
    session_start();

    $name=$_POST['name'];
    $Date=$_POST['Date'];

    $sql="DELETE FROM appointment WHERE username= '$name'";
    $result=mysqli_query($config,$sql);

    if($result==true){
        header("location:Doctor.php");
       
        }
        else{
        echo "Faild";
        }
}


?>