<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ALL prodacut</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Font Awesome 5 CSS -->
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.2/css/all.css'>
    <!-- Products List CSS -->
    <link rel="stylesheet" href="././public/css/allproduit.css">
    <link href="././public/css/styles.css" rel="stylesheet" />

   
  </head>
  <body>

  
 <main style="margin-top: 100px;">
<!-- DEMO HTML -->
    
<div class="container bg-white ">

    <div class="row " style="background: #ab64a26a;">
    <?php 
        $products=new AdministrateurController();
        $product=$products->getAllproduit();
        foreach(array_slice($product, 0, 20)  as $products){
                            
     ?>
        <div class="col-lg-3 col-sm-6 d-flex flex-column align-items-center justify-content-center product-item my-3">
            <div class="product"> <img src="./public/image/<?= $products['image_produit'] ?>" alt="">

                <ul class="d-flex align-items-center justify-content-center list-unstyled icons">
                    <li class="icon"><span class="fas fa-expand-arrows-alt"></span></li>
                    <a href="showproduct"><li class="icon"><span class="fas fa-shopping-bag"></span></li></a>
                </ul>
            </div>
            
            <div class="title fw-bold pt-4 pb-1"><?= $products['discription_produit'] ?></div>
            <div class="title fw-bold pt-4 pb-1"><?= $products['nom_produit'] ?></div>
            <div class="price"><?= $products['prix_produit'] ?></div>
        </div>
        <?php } ?>  
       
    </div>
   
</div>
 </main>

  </body>
</html>