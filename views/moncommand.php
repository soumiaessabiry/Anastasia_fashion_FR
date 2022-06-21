
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <style>
  
    
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
    <title>mon comand</title>
    <!-- <link rel="stylesheet" href="././public/css/dachbord.css"> -->
    <!-- <link href="././public/css/admin.css" rel="stylesheet" /> -->
    <style>
    
    a{
        text-decoration: none !important;
    }
    .card:hover{
        background: #410839 !important;
        color: white !important;
        font-weight: bold !important;
        pointer-events: painted !important;
    }
    .btnsidbar:hover {
    color: #410839 !important;
    background: #ffffff5c !important ;
    font-weight: bolder !important;
    padding-left: 0;
    padding-right: 0;
    }
    .offcanvas{
    background: #410839 !important;
    color: white !important;

    }
    .btn{
    /* color: aliceblue !important; */
    text-align: inherit !important;
    padding-left: 0 !important;
    padding-right: 0 !important;
    }
    a{
    text-decoration: none !important;
    color: white !important;

    }
    img{
    border: none !important;
    }

    .btnmenu{
    border: none !important;
    }

    
    </style>
</head>
<body>

<div class="container-fluid mt-5">
        <div class="d-flex justify-content-center row" style="margin-top: 82px;">
        
                    <div class="row">
                        <div class="col-md-6 text-right mt-3">
                            <h4 class="text-danger mb-0">Mon Command</h4></div>
                    </div>
                    <div class="mt-3">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="fw-bold">
                                    <tr>
                                        <th>id command</th>
                                        <th>Gmail</th>
                                        <th>Product</th>
                                        <th>Prix</th>
                                        <th>Taille</th>
                                        <th>Quantiter</th>
                                        <th>Date de commande</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <?php 
                                        $commands=new AdministrateurController();
                                        $command=$commands->getCommandbyclient();
                                        foreach($command as $commands){
                                    ?>
                                        <td><?= $commands['id_command'] ?></td>
                                        <td><?= $commands['gmail_client'] ?></td>
                                        <td><?= $commands['nom_prod_commder'] ?></td>
                                        <td><?= $commands['prix_prod_commder'] ?></td>
                                        <td><?= $commands['taille'] ?></td>
                                        <td><?= $commands['quantiter'] ?></td>
                                        <td><?= $commands['date_commande'] ?></td>
                                        <td>
                                        <form  action="operation"   onclick="return confirm('Êtes vous sur de vouloir supprimer ??!!');" method="POST" ><button type="submit" name ="deletcommand" class="btn btn-outline-danger " style=" margin-left: 10PX;" data-toggle="modal">
                                           <input type="text" hidden name="deletcommand" value="<?= $commands['id_command'] ?> "><img src="https://img.icons8.com/color/30/undefined/delete-forever.png"/></button>
                                        </form>
                                        </td>
                                    </tr>
                                    <?php } ?>  
                                    <tr id="spacing-row">
                                    <td></td>
                                    </tr>
                                  
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="text-left mb-3 "><button class="btn btn-danger btn-lg mr-5 p-3 mt-3" type="button">Valider la commande</button></div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>

