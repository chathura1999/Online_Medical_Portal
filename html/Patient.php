<?php
include("config.php");
$result=mysqli_query($config,"SELECT* from payment ORDER by id DESC");

session_start();

if(!isset($_SESSION['username'])||$_SESSION['role']!="Patient"){
    header("location:index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="../css/Sidedashboard.css">
    <link rel="stylesheet" href="../css/logged in.css">
</head>
<body>

    <!--Navigation bar start-->
    
    <header>
	
        <img class="navBar_logo" src="../images/logo.png" alt="logo" style="width: 10%;">
        <nav >
            <ul class="nav_option" >
                <!--li style="font-family: 'Montserrat',sans-serif;"><a href="Home.html">Home</a></li-->
                <li style="font-family: 'Montserrat',sans-serif;"><a href="#">Online Doctor</a></li>
                <li style="font-family: 'Montserrat',sans-serif;"><a href="Channeling.php">Chaneling</a></li>
                <li style="font-family: 'Montserrat',sans-serif;"><a href="e-Pharmacy.php">e-Pharmacy</a></li>
                <li style="font-family: 'Montserrat',sans-serif;"><a href="Payment.php">Payment</a></li>
                <li style="font-family: 'Montserrat',sans-serif;"><a href="Rate Us.php">Rate Us</a></li>
                <li style="font-family: 'Montserrat',sans-serif;"><a href="Emergency.php">Emergency</a></li>
            </ul>
        </nav>
       
        <a href="logout.php"><button style="font-family: 'Montserrat',sans-serif;"id="nav_button2">Sign Out</button></a>
        
        
    </header>

    <!--Navigation bar  end-->



<div class="sidebar">
<a href="#"><img src="../images/userACC.png" style="width: 60px;height: 60px;margin-left: 10px;padding-left:45px;"></a><h3 style="color:blue;text-align:center;" ><?= $_SESSION['username']?></h3>
  <a class="active" href="Patient.php">Home</a>
  <a href="PatientProfile.php">Profile</a>
  
</div>

<div class="content">
 <!--patient table display-->
<table border="2" style="text-align:center;margin-top:-200px;">
        <tr>
        <th>card_type</th>
        <th>email</th>
        <th>card_num</th>
        <th>expire_date</th>
        
        </tr>
            <?php


        while($res=mysqli_fetch_array($result)){
            echo '<tr>';
          
            echo '<td>'.$res['card_type'].'</td>';
            echo '<td>'.$res['email'].'</td>';
            echo '<td>'.$res['card_num'].'</td>';
            echo '<td>'.$res['expire_date'].'</td>';
            echo '</tr>';


              }

            ?>
        </table>


<!--patient table display-->


<form method="POST" style="margin-left:500px;padding:20px;" action="PatientProfilePaymentUpdate.php">
<input placeholder="ID NUM" name="id">
<input placeholder="Card type" name="Card_type">
<input placeholder="Email " name="email">
<input placeholder="Enter user card num:" name="Cnum">
<input placeholder="Expire Date" name="Edate">
<button type="submit" value="update" name="PayUpdate">Update</button>
</form>

</div>



   <!-- footer start     -->

   <div class="footer">
        <div class="footer_data">
        <div class="footer-colum" style="font-family: sans-serif;">
            <img src="../images/logo.png" alt="" style="width:50%;">
            
            <h3 style="font-family:Candara;">More about our company</h3>
            <p style="font-size: 14px;">Healthdemic Group has over two decades of experience in the healthcare sector, and is known for providing quality healthcare and valuable experience to all domestic and international patients. Our healthcare offerings are supported by a 
                team of compassionate and dedicated medical professionals who have rich knowledge and experience in their respective domains.</p>
            <div class="contact">

                <span><a href="https://www.whatsapp.com/"><img src="../images/phone-call.png" alt="" style="height: 20px; width: 20px;" ></a></span>
                <span>0772345612</span>
                
                <span><a href="https://www.google.com/intl/si/gmail/about/#"><img src="../images/email.png" alt="" style="margin: 10px;margin-left: 20px;" ></a></span>
                <span>Healthdemic@gmail.com</span>

            </div>

           
        </div>
        <div class="footer-colum" style="font-family: sans-serif;">
            <h2 style="margin-left:60px;font-family:Candara;">Keep Connected</h2>
            <br>
            <div style="margin-left:60px;">
                <span ><a href="https://www.facebook.com/"><img src="../images/facebook.png"></a></span>
                <span>Like us on Facebook</span>
            </div>

            <br>
            <div style="margin-left:60px;">
                <span><a href="https://twitter.com/"><img src="../images/twitter.png"></a></span>
                <span>Follow us on Twitter</span>
            </div>
            <br>
            <div style="margin-left:60px;">
                <span><a href="https://www.instagram.com/"><img src="../images/inster.png" style="width: 32px;height: 32px;"></a></span>
                <span>Follow us on Instagram</span>
            </div>
            <br>
        </div>


        <div class="footer-colum" style="font-family: sans-serif;">
            <h2 style="margin-left:60px;font-family:Candara;">SUPPORT</h2>
            
                <ul>
                    <div style="padding: 22px;"><a href="#" style="text-decoration: none;color: aliceblue;">Support page</a></div>
                    <div style="padding: 22px;"><a href="#" style="text-decoration: none; color: aliceblue;">FAQ</a></div>
                    <div style="padding: 22px;"><a href="#" style="text-decoration: none;color: aliceblue;">Terms of use</a></div>
                </ul>
        </div>
        </div>

        <div class="footer_under">
            &copy;Healthdemic.com|Design By SLIIT
        </div>

    </div>
<!-- footer End -->


</body>
</html>