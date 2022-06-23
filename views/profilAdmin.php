
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <style>
    ul{
        padding-left: 0 !important;
    }
    a{
        text-decoration: none !important;
    }
    .card:hover{
        background: #410839 !important;
        color: white !important;
        font-weight: bold !important;
        pointer-events: painted !important;
    }
    
    
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
    <title> profil admin</title>
    <link rel="stylesheet" href="././public/css/dachbord.css">
    <link rel="stylesheet" href="././public/css/Profiladmin.css">
	
</head>
<body>
<div class="container-fluid mt-2 ">
<div class="d-flex justify-content-center row" >
            <div class=" container form col-sm-11 " >
             <div class=" bg-white rounded">
                <div class="col-md-6 border-right">
    <?php 
        $client = new AdministrateurController();
        $clientes=$client->getAllUser();
        foreach($clientes as $client){
    ?>
   
</tr>
<?php } ?> 
                    <div class="d-flex flex-column align-items-left text-lrft p-3 "><img class="rounded-circle mt-5" src="https://img.icons8.com/external-smashingstocks-glyph-smashing-stocks/66/undefined/external-profile-web-smashingstocks-glyph-smashing-stocks.png" width="90">
                    <span class="fw-bold fs-4"><?= $client['role_user'] ?></span>
                    <span class="text-black-50 fw-bold fs-4"><?= $client['email_user'] ?></span>
                   
                </div>
                </div>
            <div class="col-md-12 p-3">
                <div class="">
                    <form action="" id="myFormupd">
                    <div class="d-flex justify-content-between align-items-center ">
                        <div class="d-flex flex-row align-items-left back mb-3">
                        </div>
                    </div>
                    <div class="row ">
                    <div class="col-md-8  mb-4"><span class="form-control fw-bold fs-4"  placeholder="nom_user"> Nom :<?= $client['nom_user'] ?></span></div>
                    <div class="col-md-8  mb-4"><span class="form-control fw-bold fs-4" value="" placeholder="Prenom_user"> Prenom :<?= $client['prenom_user'] ?></span></div>
                    <div class="col-md-8  mb-4"><span  class="form-control fw-bold fs-4" value="" placeholder="Email_user">Email:<?= $client['email_user'] ?></span></div>
                    <div class="col-md-8  mb-4"><button class="form-control fw-bold fs-4" value="" placeholder="users_password">Rôle :<?= $client['role_user'] ?></div>
                    <!-- <button class=" text-right btn btn-outline-info btn fw-bold " ><img src="https://img.icons8.com/fluency/30/undefined/edit-user-female.png"/>Save mofification</button> -->
                    </form>
    
                </div>
            </div>
        </div>
    </div>
</div>





</body>
</html>
