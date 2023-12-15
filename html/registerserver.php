<?php
    $username = "";
    $name ="";
    $phoneno ="";
    $registererrors = array();

    //connect to the database
    $db = mysqli_connect('localhost', 'root', '', 'onlinemedicalportal');

    //if the register button is clicked
    if (isset($_POST['register'])) {
        $name = $_POST['name'];
        $username = $_POST['username'];
        $phoneno = $_POST['phoneno'];
        $password_1 = $_POST['password_1'];
        $password_2 = $_POST['password_2'];
        $usertype=$_POST['userType'];

        if (empty($name)){
            array_push($registererrors,"name is required");
        }
        if (empty($username)){
            array_push($registererrors,"Username is required");
        }
        if (empty($phoneno)){
            array_push($registererrors,"phoneno is required");
        }
        if (empty($password_1)){
            array_push($registererrors,"password is required");
        }
        if(empty($usertype)){
            array_push($registererrors,"usertype");
        }
        if ($password_1 != $password_2){
            array_push($registererrors,"The two passwords do not match");

        }
        
        //if there are no errors ,save user to database
        if (count($registererrors) == 0 ) {
            $password = sha1($password_1);
            $sql = "INSERT INTO users (name,username,password,user_type,phone_no) VALUES ( '$name','$username','$password','$usertype','$phoneno')"; 
            header("location:Payform.php");
            mysqli_query($db, $sql);
                       
        }
     
    }
?>