<?php 
       require_once('../views/includes/script.php');
       ?>

<nav class="navbar navbar-expand-lg navbar-light  fixed-top" style="background:#ab64a2;">
            <div class="container px-lg-5">
                <a class="navbar-brand" href="#!"><img src="../public/image/logo.jpg" style="width:70PX;border-radius: 20px;" alt="logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent" style="padding-top: 19px;">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="../views/home.php">Home</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="../views/allproduct.php">All Products</a></li>
                  
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#!" style="padding-top: 0px;">Panier <img src="https://img.icons8.com/ios-filled/50/undefined/shopping-cart-promotion.png"/> </a></li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">compte</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li class="nav-item compte"><a class="nav-link" href="../views/login.php">&emsp; <img src="https://img.icons8.com/ios-filled/30/undefined/user-rights.png"/> &emsp; Connexion</a></li>
                                <li class="nav-item compte"><a class="nav-link" href="../views/signup.php">&emsp; <img src="https://img.icons8.com/ios-glyphs/30/undefined/user--v1.png"/> &emsp; Inscription</a></li>
                  
                            </ul>
                        </li>
                    </ul>
                    
                </div>
            </div>
        </nav>
