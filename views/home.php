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
                                    <span><?= $products['prix_produit'] ?></span>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btnadd btn-outline-dark mt-auto" href="showproduct">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                   
             <?php } ?>     
                </div>   
        </section>
        <div class="text-center text-white">
        <!-- <button class=" btn glow-on-hover example  fw-bold p-3 px-4  " style="color: #FFF; " ><a href=""></a> </button></a> -->
        <a href="allproduct"> <button class=" btn glow-on-hover SAPRO example butsigup fw-bold p-3 px-4 mb-4 " style="color: #FFF;  " > <img src="https://img.icons8.com/glyph-neue/40/undefined/dress-front-view.png"/>SEE All PRODUCTS</button></a>

        </div>
    
    <?php 
    ?>
    </body>
</html>
