<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
    <link href="../public/css/styles.css" rel="stylesheet" />
    <link href="../public/css/signcreateur.css" rel="stylesheet" />
    <title>Admin</title>
</head>
<body>
<div class="">
<div class="mb-4" >
<nav class="  navbar navbar-expand-lg navbar-light " style="background:rgb(203, 150, 16);">
        <div class="container px-lg-5">
            <a class="navbar-brand" href="#!"><img src="../public/image/logo.jpg" style="width:70PX;border-radius: 20px;" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="../views/home.php">Profil</a></li>
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="../views/home.php">Admins</a></li>
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="../views/home.php">desiner fashion</a></li>
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="../views/home.php">Product</a></li>
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="../views/home.php">Commands</a></li>
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="../views/home.php">Sign out</a></li>
                </ul>
            </div>
        </div>
</nav>
</div>
 <!-- table -->
    

</div>
<div class="wrapper ">
		<p class="text-center fw-bold fs-3 pt-2" style="color:#ecb848f8 ;">Updat Admin<img src="https://img.icons8.com/ios/50/undefined/admin-settings-male.png"/></p>
		<form class="p-3 mt-3">
			<div class="form-field d-flex align-items-center">
            <img src="https://img.icons8.com/color/40/undefined/circled-user-male-skin-type-7--v1.png"/>		
			<input type="text" name="usernameadmin" id="usernameadmin" placeholder="Username">
			</div>
			<div class="form-field d-flex align-items-center">
				<input type="file" name="imgprofadmin" id="imgprofadmin" placeholder="imgprofil">
			</div>
			<div class="form-field d-flex align-items-center">
                <img src="https://img.icons8.com/doodle/40/undefined/newsletter.png"/>
				<input type="email" name="emailadmin" id="emailadmin" placeholder="Email">
			</div>
			<div class="form-field d-flex align-items-center">
                <img src="https://img.icons8.com/ios-filled/40/undefined/lock-2.png"/>
				<input type="password" name="passwordadmin" id="passwordadmin" placeholder="Password">
			</div>
		   <input type="submit" name="updatadmin" class="btn mt-3" value="Updatadmin">
		</form>
	
   </div>
    
</body>
</html>