
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
    <title>client anasatasia</title>
    <link rel="stylesheet" href="././public/css/dachbord.css">
    <link href="././public/css/admin.css" rel="stylesheet" />

</head>
<body>

<div class="container-fluid mt-5">
        <div class="d-flex justify-content-center row" style="margin-top: 82px;">
        
                    <div class="row">
                        <div class="col-md-6 text-right mt-3">
                            <h4 class="text-danger  fw-bold mb-0"> client Anastasia</h4></div>
                    </div>
                    <div class="mt-3">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="fw-bolder" style="color:#410839; background: #b72da4a4">
                                       <th>Prenom client  </th>
                                        <th>Nom Client</th>
                                        <th>Gmail Client</th>
                                       
                                        <tbody class="fw-bold">

                                            <tr class="bg-client">
                                            <?php 
                                                    $client = new AdministrateurController();
                                                    $clientes=$client->getAllClient();
                                                    foreach($clientes as $client){
                                                ?>
                                                <tr>
                                                    <td ><?= $client['nom_user'] ?></td>
                                                    <td><?= $client['prenom_user'] ?></td>
                                                    <td><?= $client['email_user'] ?></td>
                                                </tr>
                                            </tr>
                                            <?php } ?>  
                                                    
                                                    
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
    
</body>
</html>
