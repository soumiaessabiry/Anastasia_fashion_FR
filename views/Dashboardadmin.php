
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
    <title> dachbord admin</title>
    <link rel="stylesheet" href="../public/css/dachbord.css">
	<script>
		$(document).ready(function(){
			$(".hamburger .hamburger__inner").click(function(){
			  $(".wrapper").toggleClass("active")
			})

			$(".top_navbar .fas").click(function(){
			   $(".profile_dd").toggleClass("active");
			});
		})
	</script>
</head>
<body>

<div class="wrapper">
  <div class="top_navbar">
    <div class="hamburger">
       <div class="hamburger__inner">
         <div class="one"></div>
         <div class="two"></div>
         <div class="three"></div>
       </div>
    </div>
    <div class="menu">
      <div class="logo">
      <a class="navbar-brand" href="#!"><img src="../public/image/logo.jpg" style="width:70PX;border-radius: 20px;" alt="logo"></a>

      </div>
      <div class="right_menu">
        <ul>
          <li>
          <img  class="fas " src="https://img.icons8.com/color/48/undefined/circled-user-male-skin-type-7--v1.png"/>
            <div class="profile_dd">
               <div class="dd_item">Profile</div>
               <div class="dd_item">Logout</div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
    
  <div class="main_container">
      <div class="sidebar">
          <div class="sidebar__inner">
            <div class="profile">
              <div class="img">
              <img src="https://img.icons8.com/color/48/undefined/circled-user-male-skin-type-7--v1.png"/>
              </div>
              <div class="profile_info">
                 <p>Welcome</p>
                 <p class="profile_name">non Admin</p>
              </div>
            </div>
            <ul>
              <li>
                <a href="../views/Admin.php" >
                  <span class="icon"><img src="https://img.icons8.com/color/40/undefined/administrator-male-skin-type-7.png"/></span>
                  <span class="title">Admins</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="icon"><img src="https://img.icons8.com/external-flaticons-lineal-color-flat-icons/45/undefined/external-fashion-lifestyles-flaticons-lineal-color-flat-icons-4.png"/></span>
                  <span class="title">Fashion designern</span>
                </a>
              </li>
              <li>
                <a href="">
                  <span class="icon"><img src="https://img.icons8.com/external-creatype-filed-outline-colourcreatype/45/undefined/external-fashion-outfit-filed-outline-creatype-filed-outline-colourcreatype-25.png"/></span>
                  <span class="title">Product Anastasia</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="icon"><img src="https://img.icons8.com/nolan/45/shopping-1.png"/></span>
                  <span class="title">Command</span>
                </a>
              </li>
              <li>
                 <a href="../views/client.php">
                  <span class="icon"><img src="https://img.icons8.com/fluency/45/undefined/user-group-woman-woman.png"/></span>
                  <span class="title">Client Anastasia</span>
                </a>
              </li>
            </ul>
          </div>
      </div>
      <div class="container">
        <div class="row row-cols-1 row-cols-md-4  g-4">
            <div class="col col-md-6 col-sm-12">
                <div class="card h-100 " style="  border: 5px solid #dc379d79; border-radius:10px; padding:10px ;    background: #dc379d79;;
  box-shadow: #c765ba;">
                    <span class="icon"><img src="https://img.icons8.com/fluency/68/undefined/user-group-woman-woman.png"/></span>
                    <div class="card-body">
                    <h5 class="card-title fw-bold bg-bleu">Admins</h5>
                    <p class="card-text fw-bold fs-3">Totale Admin Anastasia</p>
                    </div>
                </div>
            </div>
            <div class="col  col-md-6 col-sm-12">

                <div class="card h-100 " style="  border: 5px solid #d737dc79; border-radius:10px; padding:10px ;  background: #d737dc79; " >

                   <span class="icon"><img src="https://img.icons8.com/external-flaticons-lineal-color-flat-icons/64/undefined/external-fashion-designer-modelling-agency-flaticons-lineal-color-flat-icons-5.png"/></span>
                    <div class="card-body">
                        <h5 class="card-title fw-bold ">Fashion designern</h5>
                        <p class="card-text fw-bold fs-3">Totale Fashion designer Anastasia</p>
                    </div>
                </div>
            </div>
            <div class="col  col-md-6 col-sm-12">
            <div class="card h-100 " style="  border: 5px solid #5b37dc79; border-radius:10px; padding:10px ;   background: #5b37dc79;">

                <span class="icon"><img src="https://img.icons8.com/external-flaticons-flat-flat-icons/64/undefined/external-client-public-relations-agency-flaticons-flat-flat-icons-3.png"/></span>
                    <div class="card-body">
                    <h5 class="card-title fw-bold ">Cliens Anastasia</h5>
                        <p class="card-text fw-bold fs-3">Totale Client Anastasia</p>
                    </div>
                </div>
            </div>
            <div class="col  col-md-6 col-sm-12">
            <div class="card h-100 " style="  border: 5px solid #ab64a26a; border-radius:10px; padding:10px ;  background: #ab64a26a;  box-shadow: #c765ba;">

                   <span class="icon"><img src="https://img.icons8.com/doodle/64/undefined/used-product.png"/></span>
                    <div class="card-body">
                        <h5 class="card-title fw-bold ">Product Anastasia</h5>
                        <p class="card-text fw-bold fs-3">Totale Product Anastasia</p>
                    </div>
                </div>
            </div>
        </div>                 

      </div>
    </div>
</div>
  
	

</body>
</html>
<!-- <div class="container">
  

  <div class="card">
  <span class="icon"><img src="https://img.icons8.com/external-flaticons-lineal-color-flat-icons/64/undefined/external-fashion-designer-modelling-agency-flaticons-lineal-color-flat-icons-5.png"/></i></span>

    <div class="card-body">
      <h5 class="card-title fw-bold ">Fashion designern</h5>
      <p class="card-text fw-bold fs-3">Totale Fashion designer Anastasia</p>

    </div>
  </div>
  
  </div >
  <div class="card">
    <span class="icon"><img src="https://img.icons8.com/doodle/64/undefined/used-product.png"/></i></span>

    <div class="card-body">
    <h5 class="card-title fw-bold ">Product Anastasia</h5>
      <p class="card-text fw-bold fs-3">Totale Product Anastasia</p>
    
    </div> -->