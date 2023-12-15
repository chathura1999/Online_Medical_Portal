<!DOCKTYPE html>
<html>
	<head>
		<title>HealthDemic - Online Medical Portal</title>
		<!--link rel="Stylesheet" type="text/css" href="../css/styles_channel.css"-->
		<link rel="Stylesheet" type="text/css" href="../css/Channeling.css">
		<link rel="stylesheet" href="../css/logged in.css">
		
		<script src="js/scripts_channel.js"></script>
	</head>
	
	<body>
	<!--Navigation bar start-->
    
    <header>
	
        <a href="Home.html"><img class="navBar_logo" src="../images/logo.png" alt="logo" style="width: 10%;"></a>
        
    </header>

    <!--Navigation bar  end-->
		
		<!--content-->
		<div class="Contain-area">
			<div class="main">
				<br><br>
				<center><h1>Find a Doctor! Book an Appointment.</h1></center><br>
				<div class="heading">
					<marquee><h2 style="color:white;" > Channel Your Doctor </h2></marquee>
				</div>
			</div>
			<div class="main2">
			<form class="form" method="POST" action="insert.php" >
			   <div class="input">
				<label for="Doctor Name">Doctor Name</label>
				<input type="text" name="doctorName"  id="Doctor Name" placeholder="Doctor - Max 20 Caracters"> 
			  </div>
				<div class="input">
				 <label for="Any Specialization"> Any Specialization </label>
				 <select type="text" name="specialization" id="Any Specialization">
				 	<option value="Any Specialization">Any Specialization </option>
				 	<option value="Skin Diseases">Skin Diseases </option>
				 	<option value="Nutritional Diseases">Nutritional Diseases </option>
				 	<option value="Fungal Diseases">Fungal Diseases </option>
				 	<option value="parastic Diseases">parastic Diseases </option>
				 	<option value="Heart Diseases">Heart Diseases </option>
				 	<option value="Blood Diseases">Blood Diseases </option>
				 </select>
			  <div class="input">
				<label for="Patient Name">Patient Name</label>
				<input type="text" name="username"  id="Patient Name" placeholder="Patient Name - Max 20 Caracters"> 
			  </div>
			  <div class="input">
				<label for="Phone No">Phone No</label>
				<input type="text" name="phone_no"  id="Phone No" placeholder="+94** *** ****"> 
			  </div>
				</div>
				<div class="input">
					<label for="date">Date</label>
					<input type="date" name="date"  date="date" id="date" min="2020-09-20">
				</div>
				
				<button class="button">SUBMIT</button><br><br>
				<center><a href="Online Doctor.php">Go to main page</a></center><br><br>
				
			</form>
		</div>
		</div>		
		<!--content-->
		
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