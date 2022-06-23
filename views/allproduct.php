<?php
if(!isset($_SESSION['role'])){
			header('location:login');}

?>
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

            </div>
            <div class="title fw-bold pt-4 pb-1"  style="color:blue"><?= $products['nom_produit'] ?></div>
            <div class="title fw-normal pt-4 pb-1"><?= $products['discription_produit'] ?></div>
            <div class="title fw-bold pt-4 pb-1"><span style="color:blue">Taille disponible :</span> <span class="fs-5" style="color:darkmagenta"><?= $products['Taille'] ?></span></div>
            <div class="price fw-bold"  style="color:RED"><?= $products['prix_produit'] ?> DH</div>
            <form action="showproduct" method="POST" style="margin-bottom: 0px;">
                    <input type="hidden" name="taille" value="<?php echo $products['nom_produit']; ?>">
                    <input type="hidden" name="prix_produit" value="<?php echo $products['nom_produit']; ?>">
                    <input type="hidden" name="nom_produit" value="<?php echo $products['prix_produit']; ?> ">
                    <input type="hidden" name="id_produit" value="<?php echo $products['id_produit']; ?>">
                    <button type="submit" name="achter" class="btn btnadd btn-outline-success mt-2 text-center w-100 mb-0 p-3" >Achter</button>
            </form>
        </div>
        <?php } ?>  
       
    </div>
   
</div>
 </main>

  </body>
</html>