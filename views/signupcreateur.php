<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
       <link rel="stylesheet" href="../public/css/signcreateur.css">
	   <title>Sign in</title>
    </head>
    
<body>
<?php 
       require_once('../views/includes/sidebar.php');
       ?>
    <div class="wrapper ">
		<p class="text-center fw-bold fs-3 mt-3" style="color:#ecb848f8 ;">Inscription fashion designer <img src="https://img.icons8.com/bubbles/55/undefined/add-female-user.png"/></p>
		<form class="p-3 mt-3">
			<div class="form-field d-flex align-items-center">
				<span class="far fa-user"></span>
				<input type="text" name="nomcreat" id="nomcreat" placeholder="Nom">
			</div>
			<div class="form-field d-flex align-items-center">
			<span class="far fa-user"></span>
			<input type="text" name="prenomcreat" id="prenomcreat" placeholder="Prenom">
			</div>
			<div class="form-field d-flex align-items-center">
				<span class="far fa-user"></span>
				<input type="text" name="cincreat" id="cincreat" placeholder="CIN">
			</div>
			<div class="form-field d-flex align-items-center">
				<span class="far fa-user"></span>
				<input type="email" name="emailcreat" id="emailcreat" placeholder="Email">
			</div>
			<div class="form-field d-flex align-items-center">
				<span class="fas fa-key"></span>
				<input type="password" name="passwordcreat" id="pwdcreat" placeholder="Password">
			</div>
		<input type="submit" name="logincreat" class="btn mt-3" value="login">
		</form>
		<div class="text-center fs-6">
			<a href="#">Forget password?</a> or <a href="#">login</a>
		</div>
   </div>

</body>
</html>