
<nav class="navbar navbar-expand-lg navbar-light  fixed-top" style="background:#ab64a2;">
            <div class="container px-lg-5">
                <a class="navbar-brand" href="#!"><img src="././public/image/logo.jpg" style="width:70PX;border-radius: 20px;" alt="logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent" style="padding-top: 19px;">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="home">Home</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="allproduct">All Products</a></li>
                  
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">compte</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li class="nav-item compte"><a class="nav-link" href="login">&emsp; <img src="https://img.icons8.com/ios-filled/30/undefined/user-rights.png"/> &emsp; Connexion</a></li>
                                <li class="nav-item compte"><a class="nav-link" href="signup">&emsp; <img src="https://img.icons8.com/ios-glyphs/30/undefined/user--v1.png"/> &emsp; Inscription</a></li>
                                <li class="nav-item compte"><a class="nav-link" href="logout">&emsp; <img src="https://img.icons8.com/ios-glyphs/30/undefined/user--v1.png"/> &emsp; logout</a></li>
                  
                            </ul>
                        </li>
                       
                    </ul>
                    <div  >
                          <button class="btn btn-lg fw-bold" style="background: linear-gradient(45deg, #212529, #9f1a8ad6);color: white;border: none;" ><?=$_SESSION["prenom_user"]  ?? ''?></button>
                          
                           <button class="btn btn-lg" style="background: linear-gradient(45deg, #212529, #9f1a8ad6);color: white;border: none;"><?=$_SESSION["role"]  ?? ''?></button>
                    
                          </div>
                    
                </div>
            </div>
        </nav>
