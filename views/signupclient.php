<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
       <link rel="stylesheet" href="../public/css/signcreateur.css">
     
	   <title>SignCLIENT in</title>
    </head>
    
<body>
<?php 
       require_once('../views/includes/sidebar.php');
       ?>
    <div class="wrapper ">
		<p class="text-center fw-bold fs-3 pt-4" style="color:#ecb848f8 ;">Inscription<img src="https://img.icons8.com/color/48/undefined/join-skin-type-7.png"/></p>
		<form class="p-3 mt-3">
			<div class="form-field d-flex align-items-center">
				<span class="far fa-user"></span>
				<input type="text" name="nomclient" id="nomclient" placeholder="Nom">
			</div>
			<div class="form-field d-flex align-items-center">
			<span class="far fa-user"></span>
			<input type="text" name="prenomclient" id="prenomclient" placeholder="Prenom">
			</div>
			<div class="form-field d-flex align-items-center">
				<span class="far fa-user"></span>
				<input type="file" name="imgprofil" id="imgprofil" placeholder="imgprofil">
			</div>
			<div class="form-field d-flex align-items-center">
				<span class="far fa-user"></span>
				<input type="email" name="emailclient" id="emailclient" placeholder="Email">
			</div>
			<div class="form-field d-flex align-items-center">
				<span class="fas fa-key"></span>
				<input type="password" name="passwordclient" id="pwdclient" placeholder="Password">
			</div>
		<input type="submit" name="loginclient" class="btn mt-3" value="login">
		</form>
		<div class="text-center fs-6">
			<a href="#">Forget password?</a> or <a href="#">login</a>
		</div>
   </div>

</body>
</html>