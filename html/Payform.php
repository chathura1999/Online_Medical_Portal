<!DOCKTYPE html>
<html>
	<head>
		<title>HealthDemic - Online Medical Portal</title>
		<link rel="Stylesheet" type="text/css" href="../css/PayformStyles.css">
		<script src="../js/Payformscripts.js"></script>
	</head>
	
	<body>
	
<section>
	<div class="payment">
<form action="Payforminsert.php" method="POST" >

	<div class="title">
		Payment Form
	</div>
	<div class="form" onsubmit="return validation();">
		<div class="input_feild">
			<label> First Name &nbsp; </label>
			<input type="text" name="firstName" class="input">
		</div>
		<div class="input_feild">
			<label> Last Name &nbsp;</label>
			<input type="text" name="lastName" class="input">
		</div>
		<div class="input_feild">
			<label> Address&nbsp;&nbsp;&nbsp; </label>
			<textarea class="textarea" name="address" ></textarea>
		</div>
	
		<div class="input_feild">
			<label> ID Num &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input type="text" name="idNumV" class="input">
		</div>
		<div class="input_feild">
			<label> Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
			<input type="email" name="email" class="input">
		</div>
		<div class="input_feild">
			<label> Contact Num</label>
			<input type="text" name="contactNum" class="input">
		</div>
		<br>
		<div class="method">
			<ol><b>Payment procedure</b></ol> 
		</div>
		<br>
		<div class="input_feild">
			<label> Payment method &nbsp; &nbsp; </label>
			<div class="method">
				<select name="Cardtype">
					
					<option value="visa">Visa</option>
					<option value="master">Master</option>
					<option value="amex">Amex</option>
				</select>
				</div>
		</div>
		<div class="input_feild">
			<label> Card Num&nbsp;&nbsp;</label>
			<input type="text" name="cardNum" class="input">
		</div>
		<div class="input_feild">
			<label> Expiary Date:</label>
			<input type="date" name=" ExpiaryDate" class="input">
		</div>
		<div class="input_feild">
			<p>I agree terms and conditions</p>&nbsp;&nbsp;&nbsp;
			<input type="checkbox" name="check" id="check" value="check" onclick="enableButton ()" required>
	
		</div>
		<input type="submit" value="Submit" id="buttonPay" disabled >
	</div>
</div>
</section>
</body>
</html>
	