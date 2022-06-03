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
    <link href="../public/css/admin.css" rel="stylesheet" />
    <title>Clienttable</title>
</head>
<body>
<div class="">
<div class="mb-4" >
<nav class="  navbar navbar-expand-lg navbar-light " style="background:rgb(203, 150, 16);">
        <div class="container px-lg-5">
            <span class="navbar-brand" ><img src="../public/image/logo.jpg" style="width:70PX;border-radius: 20px;" alt="logo"></span>
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
            <div class=" mx-2 mt-3 table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                        <!-- <button type="button" class="btn btn-outline-warning btn-lg fw-bold mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal"> <img src="https://img.icons8.com/color/48/undefined/administrator-male-skin-type-7.png" style="width: 40px;height: 40px;"></button> -->
                        <a href="#"   class="btn btn-outline-secondary btn-lg fw-bold mb-3" >Client Anastasia <img src="https://img.icons8.com/color/48/undefined/administrator-male-skin-type-7.png" style="width: 40px;height: 40px;"></a>
                        </div>
                       
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table align-middle" id="myTableclient">
                        <thead>
                            <tr style="  background-color:rgba(40, 67, 205, 0.492)">
                                <th >Profil</th>
                                <th hidden>id</th>
                                <th>Prenon</th>
                                <th>Nom</th>
                                <th>Email</th>
                                <th>Password</th>
                            </tr>
                        </thead>
                        <tbody class="fw-bold">
                                    <tr class="bg-client">
                                        <td ><img src="https://img.icons8.com/ios-filled/40/undefined/user-female-circle.png"/></td>
                                        <td hidden >1</td>
                                        <td class="text-nowrap">prenon client</td>
                                        <td class="text-nowrap">Nomclient </td>
                                        <td class="text-nowrap">client@gmail.com</td>
                                        <td class="text-nowrap">2001</td>
                                       
                                    </tr>
                                    <tr id="spacing-row">
                                    <td></td>
                                    </tr>
                                    
                        </tbody>
                    </table>
                </div>
    



</body>
</html>