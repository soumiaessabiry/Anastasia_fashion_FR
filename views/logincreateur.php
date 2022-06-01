<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
       <link rel="stylesheet" href="../public/css/signcreateur.css">
       <link href="../public/css/styles.css" rel="stylesheet" />

     
	   <title>logincreateur</title>
    </head>
    
<body>
<?php 
       require_once('../views/includes/sidebar.php');
       ?>
    <div class="wrapper ">
    <p class="text-center fw-bold fs-3 pt-2" style="color:#ecb848f8 ;">Login<img src="https://img.icons8.com/color-glass/48/undefined/user-rights.png"/></p>
		<form class="p-3 mt-3">
		
			<div class="form-field d-flex align-items-center">
				<span class="far fa-user"></span>
                <img src="https://img.icons8.com/color/30/undefined/email-sign.png"/>
                 <input type="email" name="emailcreatlog" id="emailcreatlog" placeholder="Email">
			</div>
			<div class="form-field d-flex align-items-center">
				<span class="fas fa-key"></span>
                <img src="https://img.icons8.com/cute-clipart/30/undefined/privacy.png"/>				
                <input type="password" name="passwordcreatlog" id="pwdcreatlog" placeholder="Password">
			</div>
		<input type="submit" name="logincreat" class="btn mt-3 fs-4" value="login">
		</form>
		<div class="text-center fs-6">
			 <a class="  fs-5" href="../views/signupcreateur.php">Inscription</a>
		</div>
        
   </div>

</body>
</html>