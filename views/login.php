<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
       <link rel="stylesheet" href="../public/css/signcreateur.css">
       <link href="../public/css/styles.css" rel="stylesheet" />

     
	   <title>loginclient</title>
    </head>
    
<body>
<?php 
       require_once('../views/includes/sidebar.php');
       ?>
    <div class="wrapper ">
		<p class="text-center fw-bold fs-3 pt-2" style="color:#ab64a2 ;">Login<img src="https://img.icons8.com/color-glass/48/undefined/user-rights.png"/></p>
		<form class="p-3 mt-2">
		
			<div class="form-field d-flex align-items-center">
                <img src="https://img.icons8.com/color/30/undefined/email-sign.png"/>
                 <input type="email" name="emailclient" id="emailclient" placeholder="Email">
			</div>
			<div class="form-field d-flex align-items-center">
                <img src="https://img.icons8.com/cute-clipart/30/undefined/privacy.png"/>				
                <input type="password" name="passwordclient" id="pwdclient" placeholder="Password">
			</div>
		<input type="submit" name="loginclient" class="btn mt-3 fs-4" value="login">
		</form>
		<div class="text-center fs-6">
        <a class="  fs-5" href="../views/signup.php">Inscription</a>
		</div>
        
   </div>
  
</body>
</html>