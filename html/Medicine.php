<?php
include("config.php");
$result=mysqli_query($config,"SELECT* from medicine ORDER by id DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  
    
    <link rel="stylesheet" type="text/css" href="../css/register.css">
</head>
<body>
    
    <div class="header">
		<h2>ADD  MEDICINE</h2>
	</div>

	<form method="POST" action="addMedicine.php">
		<!--display validation error here-->
		
		<div class="input-group">
			<label>Name</label>
			<input type="text" name="name">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="text" name="Email">
		</div>
		
		<div class="input-group">
			<label>Enter medicine Details</label>
			<textarea name="medicinData" placeholder="Enter medicine details" rows="6" cols="50"></textarea>
		</div>
		<div class="input-group">
			<label>ENTER ADDRESS</label>
			<textarea name="ADDRESS" placeholder="ENTER ADDRESS" rows="6" cols="50"></textarea>
		</div>
		
	
		<div class="input-group">
			<button type="submit" name="register" class="btn">ADD DATA</button>
		</div>
		
	</form>


	<!--table display-->

<div class="content" style="text-align:center;margin-left:600px;padding-top:100px;">
<table border="2">
        <tr>
      
        <th>name</th>
        <th>email</th>
		<th>med_data</th>
		<th>address</th>
        
        </tr>
            <?php


        while($res=mysqli_fetch_array($result)){
            echo '<tr>';
          
            echo '<td>'.$res['name'].'</td>';
            echo '<td>'.$res['email'].'</td>';
            echo '<td>'.$res['med_data'].'</td>';
			echo '<td>'.$res['address'].'</td>';
			

            echo '</tr>';


              }

            ?>
		</table>
		

</div>

<!--table display-->


<form method="POST" style="margin-left:500px;padding:40px;" action="MedicineUpdate.php">
<input placeholder="Enter Your ID :" name="id">
<input placeholder="Enter New Medicine:" name="med_data">
<input placeholder="Enter Address:" name="address">
<input placeholder="Enter New email :" name="email">
<button type="submit" value="update" name="MedUpdate">Update</button>
</form>


</body>
</html>
