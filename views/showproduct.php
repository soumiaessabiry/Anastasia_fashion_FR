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
    <link rel="stylesheet" href="../public/css/showproduit.css">
    <link href="../public/css/styles.css" rel="stylesheet" />

   
  </head>
    <body> 
        <main style="margin-top: 100px;">
            <!-- DEMO HTML -->
            <?php 
                require_once('../views/includes/sidebar.php');
                ?>
            <div class="container bg-white ">

                <div class=" row d-flex justify-content-center container mt-5">
                    <figure class="col-lg-5 col-sm-12  snip1527">
                    <div class="image"><img src="../public/image/prod6.jpg" alt="pr-sample23" />
                    </div>
                        <figcaption>
                            <h3>Dreess Anastasia</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <button class="btn btn-danger btn-lg ">230dh</button>
                        </figcaption>
                        <a href="#"></a>
                    </figure>
                    <figure class="col-lg-5 col-sm-12   ">
                        <figcaption>
                            <div class="card text-center" style=" margin: 16px auto;" >
                                <div class="card-header fw-bold " style="background: #d4c864d2;"> Commande</div>
                                <div class="card-body">
                                    <h5 class="card-title">Quantiter</h5>
                                    <p class="card-text">
                                    <input type="number" name="qutiterproduit" id="qutiterproduit" value="1" >
                                    </p>
                                    <a href="#" class="btn btn-success">Ajouter au panier</a>
                                </div>
                                
                            </div>
                        </figcaption>
                    </figure>
                </div>
            </div>  
        </main>
    </body>
</html>        