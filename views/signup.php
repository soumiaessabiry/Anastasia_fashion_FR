
<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
       <link rel="stylesheet" href="././public/css/signcreateur.css">
       <link href="././public/css/styles.css" rel="stylesheet" />

    <style>
		body{
			color:red !important;
		}
	</style>
	   <title>SignCLIENT in</title>
    </head>
    
<body>
        
    <div class="wrapper ">
		
	<p class="text-center fw-bold fs-3 pt-2" style="color:#ab64a2 ;">Inscription<img src="https://img.icons8.com/color/48/undefined/join-skin-type-7.png"/></p>
		<form class="p-3 mt-3" method="post" action="operation">

			<div class="form-field d-flex align-items-center">
				
                <img src="https://img.icons8.com/color/40/undefined/circled-user-male-skin-type-7--v1.png"/>	
				<input type="text" name="nomclient" id="nomclient" placeholder="Nom">
			</div>
			<div class="form-field d-flex align-items-center">
			
            <img src="https://img.icons8.com/color/40/undefined/circled-user-male-skin-type-7--v1.png"/>		
			<input type="text" name="prenomclient" id="prenomclient" placeholder="Prenom">
			</div>
			<div class="form-field d-flex align-items-center">
				
				<input type="file" name="imgprofilclient" id="imgprofilclient" placeholder="imgprofil">
			</div>
			<div class="form-field d-flex align-items-center">
				
                <img src="https://img.icons8.com/doodle/40/undefined/newsletter.png"/>
				<input type="email" name="emailclient" id="emailclient" placeholder="Email">
			</div>
			<div class="form-field d-flex align-items-center">
				<span class="fas fa-key"></span>
                <img src="https://img.icons8.com/ios-filled/40/undefined/lock-2.png"/>
				<input type="password" name="passwordclient" id="pwdclient" placeholder="Password">
			</div>
			<div class="form-field d-flex align-items-center">
				
				<img src="https://img.icons8.com/ios-filled/40/undefined/good-pincode.png"/>			
				<input type="password" name="confpasswordclient" id="confpwdclient" placeholder="Confirm Password">
			</div>
		<input type="submit" name="signupclient" class="btn mt-3" value="Inscription">
		</form>
		<div class="text-center fs-6">
        <a class="  fs-5" href="login">login</a>
		</div>
   </div>

</body>
</html>