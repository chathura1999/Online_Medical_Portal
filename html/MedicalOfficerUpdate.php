<?php
if(isset($_POST['OfficerUpdate'])){
    include 'config.php';
    session_start();

    $name=$_POST['name'];
    $id=$_POST['id'];
    $Utype=$_POST['Utype'];
    $Uphone=$_POST['Uphone'];
   
    

    $sql="UPDATE users SET username='$name',user_type= '$Utype',phone_no='$Uphone' WHERE id='$id'";
    $result=mysqli_query($config,$sql);

    if($result==true){
        header("location:MedicalOfficer.php");
       
        }
        else{
        echo "Faild";
        }
}


?>