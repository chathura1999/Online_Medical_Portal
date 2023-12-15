<?php
session_start();
if(!isset($_SESSION['username'])||$_SESSION['role']!="MedicalOfficer"){
    header("location:index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  
    <link rel="stylesheet" href="../css/Sidedashboard.css">
    <link rel="stylesheet" href="../css/logged in.css">
    <link rel="stylesheet" type="text/css" href="../css/AddDOC.css">
    <script src="../js/AddDOCscripts.js"></script>
    <link rel="Stylesheet" type="text/css" href="../css/AddDOC.css">
    
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
  <a  href="MedicalOfficer.php">Home</a>
  <a href="MedicalOfficerProfile.php">Profile</a>
  <a class="active"  href="MedicalOfficerAddDOC.php">ADD NEW DOCTOR</a>
</div>

<div class="content">

<div class="appointment_form" style="margin-top:-200px;">
        <form class="login_form" action="Doctorregisterserver.php"  method="POST" name="form" onsubmit="return validated()" onsubmit="return radiobtn_validate()">
    
            <h2 style="text-align: center;">ADD NEW DOCTOR</h2>
            <div class="form-field">Enter Full name</div>
            <input autocomplete="off" type="text" name="doctorName" required>
            <div id="Fname_error">(6 - 9 Characters)</div>
    
            <div class="form-field">Enter mobile number</div>
            <input type="text" name="doctorMobileN" required pattern="[0-9]{10}">
            <div id="MobileN_error">Please enter valid number</div>
    
            <div class="form-field">Enter Password:</div>
            <input type="text" name="doctorPassword" required>
            <div id=EmailN_error>Please enter valid password(6 - 9 Characters)</div>
            
        
        
            <div class="form-field">
                <lable>Gender</lable>
                
                <input type="radio" name="Gender" id="male"required >Male
                
                <input type="radio" name="Gender" id="female" required>Female
                
            </div>
            <div class="form-field">
                <lable>TYPE</lable>
                
                <input type="radio" name="userType" id="male" value="Doctor" checked>Doctor
                
            </div>
            <div id="G_error"></div>
            <div class="form-field">
                choose date:
                <input type="date" name="doctorDate" required style="width: 200px;">
                <div id="Date_error"></div>
            </div>
        
            <input id="button12" type="submit" value="ADD DOCTOR">
    
        </form>
    </div>
    <script src="../js/AddDOCscripts.js"></script>
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