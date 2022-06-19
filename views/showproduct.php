<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>product show</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Font Awesome 5 CSS -->
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.2/css/all.css'>
    <!-- Products List CSS -->
    <link rel="stylesheet" href="././public/css/showproduit.css">
    <link href="././public/css/styles.css" rel="stylesheet" />

   
  </head>
    <body> 
        <main style="margin-top: 50px;">
            <!-- DEMO HTML -->
   
            <div class="container bg-white ">
            <?php 
                    $products=new AdministrateurController();
                    $product=$products->creatpanier($_SESSION['id_produit']);

                    foreach($product  as $products){
               
                        
                                    
                ?> 
                <div class="row d-flex justify-content-center container mt-5">
                    <figure class="col-lg-8 col-sm-12  snip1527" style="width: 100%;">
                    <div class="image"><img src="./public/image/<?= $products['image_produit'] ?>" alt="pr-sample23" />
                    </div>
                        <figcaption>
                            <h3  style="color:#fff"><?php echo $products['nom_produit']; ?></h3><br>
                            <button class="btn btn-lg p-3 fs-3" style="background: #410000; color:azure" ><?php echo $products['prix_produit']; ?>DH</button>
                        </figcaption>
                        <a href="#"></a>
                    </figure>

                    <figure class="col-lg-8 col-sm-12   ">
                        <figcaption>
                            <div class="card text-center" style=" margin: 16px auto;" >
                                <div class="card-header fw-bold " style="background: #ab64a26a;">Commande</div>
                                <div class="card-body">

                                    <h5 class="card-title">
                                    <h4><span  "> Taille disponible :<span class="fw-bold fs-5" style="color:blueviolet"> <?= $products['Taille'] ?></span></span></h4>
                                    </h5>
                                    <h5 class="card-title">Quantiter</h5>
                                    <p class="card-text">
                                    <form action="operation" method="Post">
                                    <input type="hidden" name="taille" value="<?= $products['Taille'] ?>">
                                    <input type="hidden" name="nom_produit" value="<?php echo $products['nom_produit']; ?>">
                                   <input type="hidden" name="prix_produit" value="<?php echo $products['prix_produit']; ?>">
                                    <input type="hidden" name="id_produit" value="<?php echo $products['id_produit']; ?>">
                                    <input type="number" name="qutiterproduit" id="qutiterproduit" value="1" >
                                    <input class="fw-bold btn btn-outline-success" type="submit" name=" Achter"  value="valider " >
                                    </p>
                                    </form>
                                </div>
                                
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <?php } ?>  
            </div>  
        </main>
    </body>
</html>        