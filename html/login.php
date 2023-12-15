<?php
session_start();


$conn=new mysqli("localhost","root","","onlinemedicalportal");
$msg="";

if(isset($_POST['login'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $password=sha1($password);
    $usertype=$_POST['userType'];

    $sql="SELECT * FROM users WHERE username=? AND password=? AND user_type=?";
    $stmt=$conn->prepare($sql);
    $stmt->bind_param("sss",$username,$password,$usertype);
    $stmt->execute();
    $reult = $stmt->get_result();
    $row = $reult->fetch_assoc();

    $_SESSION['username'] = $row['username'];
    $_SESSION['role'] = $row['user_type'];
    session_write_close();

    if($reult->num_rows==1 && $_SESSION['role']=="Patient"){
        header("location:Patient.php");
    }else if($reult->num_rows==1 && $_SESSION['role']=="Doctor"){
        header("location:Doctor.php");
    }else if($reult->num_rows==1 && $_SESSION['role']=="MedicalOfficer"){
        header("location:MedicalOfficer.php");
    }else {
        $msg = "Username or password incorrect";
    }

}
?>


<!DOCTYPE html>
<html>
<head>
	<title>User registration</title>
	<link rel="stylesheet" type="text/css" href="../css/style_login.css">
		<link rel="stylesheet" href="../css/logged in.css">
</head>
<body>
	<!--Navigation bar start-->
    
    <header>
	
        <a href="Home.html"><img class="navBar_logo" src="../images/logo.png" alt="logo" style="width: 10%;"></a>
        
    </header>

    <!--Navigation bar  end-->
	
	<div class="header">
		<h2>Login</h2>
	</div>

	<form method="post" action="<?= $_SERVER['PHP_SELF'] ?>" class="p-4">
		
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username">
		</div>
		
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<input type="radio" name="userType" value="Patient">&nbsp;Patient&nbsp;&nbsp;
		<input type="radio" name="userType" value="Doctor">&nbsp;Doctor&nbsp;&nbsp;
		<input type="radio" name="userType" value="MedicalOfficer">&nbsp;Medical Officer&nbsp;&nbsp;
		<div class="input-group">
			<button type="submit" name="login" class="btn">Login</button>
		</div>
		<p>
			Not yet a member? <a href="register.html">Sign up</a>
		</p>
		<h5 class="tex-danger text-center"><?= $msg; ?></h5>
	</form>

</body>
</html>