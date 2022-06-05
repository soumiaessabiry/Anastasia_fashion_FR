<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
       <link rel="stylesheet" href="../public/css/signcreateur.css">
	   <link href="../public/css/styles.css" rel="stylesheet" />

	   <title>Signcreateur</title>
    </head>
    
<body>
<?php 
       require_once('../views/includes/sidebar.php');
       ?>
    <div class="wrapper  ">
		<p class="text-center fw-bold fs-3 " style="color:#ecb848f8 ;">Inscription fashion designer <img src="https://img.icons8.com/bubbles/55/undefined/add-female-user.png"/></p>
		<form class="p-3 mt-3">
			<div class="form-field d-flex align-items-center">
				
				<img src="https://img.icons8.com/color/40/undefined/circled-user-male-skin-type-7--v1.png"/>	
				<input type="text" name="nomcreat" id="nomcreat" placeholder="Nom">
			</div>
			<div class="form-field d-flex align-items-center">
			
			<img src="https://img.icons8.com/color/40/undefined/circled-user-male-skin-type-7--v1.png"/>		
			<input type="text" name="prenomcreat" id="prenomcreat" placeholder="Prenom">
			</div>
			<div class="form-field d-flex align-items-center">
				
				<img src="https://img.icons8.com/color/40/undefined/identity-theft.png"/>
				<input type="text" name="cincreat" id="cincreat" placeholder="CIN">
			</div>
			<div class="form-field d-flex align-items-center">
				
				<input type="file" name="imgprofilcreat" id="imgprofilcreat" placeholder="imgprofilcreat">
			</div>
			<div class="form-field d-flex align-items-center">
				
				<img src="https://img.icons8.com/doodle/40/undefined/newsletter.png"/>
				<input type="email" name="emailcreat" id="emailcreat" placeholder="Email">
			</div>
			<div class="form-field d-flex align-items-center">
				
				<img src="https://img.icons8.com/ios-filled/40/undefined/lock-2.png"/>
				<input type="password" name="passwordcreat" id="pwdcreat" placeholder="Password">
			</div>
			<div class="form-field d-flex align-items-center">
				
				<img src="https://img.icons8.com/ios-filled/40/undefined/good-pincode.png"/>			
					<input type="password" name="confpasswordcreat" id="confpwdcreat" placeholder="Confirm Password">
			</div>
		<input type="submit" name="logincreat" class="btn mt-3 fs-5" value="Inscription">
		</form>
		<div class="text-center fs-6">
		<a class="  fs-5" href="../views/logincreateur.php">login</a>

		</div>
   </div>

</body>
</html>