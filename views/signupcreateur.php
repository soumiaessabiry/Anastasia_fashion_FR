<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- <link rel="stylesheet" href="css/style.css"> -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet"> -->
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->
       <link rel="stylesheet" href="../public/css/signcreateur.css">
       <!-- <link rel="icon" type="image/x-icon" href="assets/favicon.ico" /> -->
       <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> -->
	   <!-- <link rel="icon" type="image/x-icon" href="assets/favicon.ico" /> -->
        <!-- Bootstrap icons-->
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />    -->
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