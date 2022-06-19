
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>homeanastasia</title>
        <link href="././public/css/styles.css" rel="stylesheet" />
        <style>
            .btnadd{
                background:  #410839 !important;
                color: #FFF !important;
                font-weight: bold !important;
            }
            .btnadd:hover{
                background:  #ab64a26a !important;
                color: #410839 !important;
                font-weight: bold !important;
            }
        </style>

    </head>
    <body>
       
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder" style="color:#dda2d5; font-family: monospace;">Anastasia Fashion</h1>
                    <p class="lead fw-bold text-white-50 mb-0">Looking for quality and reliability?? Anastasia welcomes you <span><img src="https://img.icons8.com/external-bearicons-flat-bearicons/64/000000/external-Welcome-miscellany-texts-and-badges-bearicons-flat-bearicons.png"/></span></p>
                    <a href="#"> <button class=" btn glow-on-hover example butsigup fw-bold p-4  fs-2" style="color: #FFF;font-family: monospace;  " > Anastasia Fashion </button></a>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="">
            <div class="container px-4 px-lg-5 mt-5" style="background: #ab64a26a; padding: 15px; margin-top: 12px;" >
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <?php 
                    $products=new AdministrateurController();
                    $product=$products->getAllproduit();

                    foreach(array_slice($product, 0, 6)  as $products){
               
                        
                                    
                ?>    
                <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="./public/image/<?= $products['image_produit'] ?>"alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"><?= $products['nom_produit'] ?></h5>
                                    <span class="fw-bolder"><span style="color:darkmagenta">Prix :</span><?= $products['prix_produit'] ?>DH</span>
                                    <h4><span> Taille disponible : <?= $products['Taille'] ?></span></span></h4>
                                </div>
                            </div>
                            <form action="showproduct" method="POST" style="margin-bottom: 0px;">
                    
                                <input type="hidden" name="prix_produit" value="<?php echo $products['nom_produit']; ?>">
                                <input type="hidden" name="nom_produit" value="<?php echo $products['prix_produit']; ?>">
                                <input type="hidden" name="id_produit" value="<?php echo $products['id_produit']; ?>">
                                <button type="submit" name="achter" class="btn btnadd btn-outline-dark mt-2 text-center w-100 mb-0 p-3" >Achter</button>
                            </form>
                            
  

                        </div>
                    </div>
                   
             <?php } ?>     
                </div>   
        </section>
        <div class="text-center text-white">
        <a href="allproduct"> <button class=" btn glow-on-hover SAPRO example butsigup fw-bold p-3 px-4 mb-4 " style="color: #FFF;  " > <img src="https://img.icons8.com/glyph-neue/40/undefined/dress-front-view.png"/>SEE All PRODUCTS</button></a>

        </div>
    
    <?php 
    ?>
    </body>
</html>
