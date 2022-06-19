
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
    .bg-product:hover{
        background: #ab64a26a !important;
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
    <title>product anasatasia</title>
    <link rel="stylesheet" href="././public/css/dachbord.css">
    <link href="././public/css/admin.css" rel="stylesheet" />

</head>
<body>

    <div class="container-fluid mt-2">

        <div class="d-flex justify-content-center row">
            <div class=" container col-sm-11">
                    <div class=" bg-white rounded">
                        <div class="table-title">
                            <div class="row">
                                <div class="col">
                                <button type="button" class="btn btn-outline btn-lg fw-bold mb-3 fd" style="background-color:#ab64a26a;" data-bs-toggle="modal" data-bs-target="#exampleModal">Product Anastasia<img src="https://img.icons8.com/doodle/64/undefined/used-product.png"/> </button>
                                </div>
                            </div>
                            <div class="mt-3">
                                <div class="table-responsive">
                                    <table class="table  ">
                        
                                        <thead>
                                        <tr style=" background-color: #ab64a26a;">
                                            <th >id</th>
                                            <th>nom_produit</th>
                                            <th>image_produit</th>
                                            <th>discription</th>
                                            <th>Taille disponible</th>
                                            <th>prix_produit</th>
                                            <th>quantiter_produit</th>
                                            <th>designer  ajouté  : </th>
                                        </tr>
                                        </thead>
                                        <tbody class="fw-bold">
                                        <?php 
                                            $products=new AdministrateurController();
                                            $product=$products-> getAllproduit();
                                            foreach($product as $products){
                                        ?>
                                        <tr class="bg-product">
                                        <td><?= $products['id_produit'] ?></td>
                                        <td><?= $products['nom_produit'] ?></td>
                                        <td><?= $products['image_produit'] ?></td>
                                        <td><?= $products['discription_produit'] ?></td>
                                        <td><?= $products['Taille'] ?></td>
                                        <td><?= $products['prix_produit'] ?></td>
                                        <td><?= $products['quantiter_produit'] ?></td>
                                        <td><?= $products['id_user_product'] ?></td>
                                            </tr>
                                                    
                                            <?php } ?>        
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>	
    </div>
</body>
</html>
