<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href="././public/css/styles.css" rel="stylesheet" >
        <link rel="stylesheet" href="././public/css/signcreateur.css">
       
<style>
    li{
        color: red !important;
    }
</style>

     
	   <title>loginclient</title>
    </head>
    
<body>

    <div class="wrapper ">
		<p class="text-center fw-bold fs-3 pt-2" style="color:#ab64a2 ;">Login<img src="https://img.icons8.com/color-glass/48/undefined/user-rights.png"/></p>
		<form class="p-3 mt-2 " method="POST" action="operation"  data-parsley-validate="">
		
			<div class="form-field d-flex align-items-center">
                <img src="https://img.icons8.com/color/30/undefined/email-sign.png"/>
                 <input type="email" name="emailuser" id="emailuser" placeholder="Email" minlength="4"  maxlength="30" data-parsley-trigger="change" required>
			</div>
			<div class="form-field d-flex align-items-center">
                <img src="https://img.icons8.com/cute-clipart/30/undefined/privacy.png"/>				
                <input type="password" name="passworduser" id="pwduser" placeholder="Password" minlength="6"  maxlength="10" data-parsley-trigger="change" required>
			</div>
		<input type="submit" name="loginuser" class="btn mt-3 fs-4" value="login">
		</form>
		<div class="text-center fs-6">
        <a class="  fs-5" href="signup">Inscription</a>
		</div>
        
   </div>
  
</body>
</html>