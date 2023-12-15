<?php
if(isset($_POST['DocUPDATE'])){
    include 'config.php';
    session_start();

    $name=$_POST['name'];
    $Date=$_POST['Date'];

    $sql="UPDATE appointment SET date='$Date' WHERE username= '$name'";
    $result=mysqli_query($config,$sql);

    if($result==true){
        header("location:Doctor.php");
       
        }
        else{
        echo "Faild";
        }
}


?>