
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <style>
    
    a{
        text-decoration: none !important;
    }
    .card:hover{
        background: #410839 !important;
        color: white !important;
        font-weight: bold !important;
        pointer-events: painted !important;
    }
    .btnsidbar:hover {
    color: #410839 !important;
    background: #ffffff5c !important ;
    font-weight: bolder !important;
    padding-left: 0;
    padding-right: 0;
    }
    .offcanvas{
    background: #410839 !important;
    color: white !important;

    }
    .btn{
    /* color: aliceblue !important; */
    text-align: inherit !important;
    padding-left: 0 !important;
    padding-right: 0 !important;
    }
    a{
    text-decoration: none !important;
    color: white !important;

    }
    img{
    border: none !important;
    }

    .btnmenu{
    border: none !important;
    }

    
    </style>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">  -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
    <title> dachbord admin</title>
    <link rel="stylesheet" href="././public/css/dachbord.css">
  

</head>
<body>

<div class="row">
    <div class="container bg-light " >
    <div class="row row-cols-1 row-cols-md-4  g-4 justify-content-center" style="  margin-top: 82px">
        <div class="col col-md-5 col-sm-10 ">
            <div class="card h-100 " style="  border: 5px solid #dc379d79; border-radius:10px; padding:10px ; background: #dc379d79;box-shadow: #c765ba;">
                <span class="icon"><img src="https://img.icons8.com/fluency/68/undefined/user-group-woman-woman.png"/></span>
                <div class="card-body">
                <h5 class="card-title fw-bold bg-bleu">Admins</h5>
                <p class="card-text fw-bold fs-3">Totale Admin Anastasia</p>
               <H1> <?php 
                   $admine = new AdministrateurController();
                  echo count($admine->getAlladmin());            
                  ?>
                </H1>
                </div>
            </div>
        </div>
        <div class="col col-md-5 col-sm-10">

            <div class="card h-100 " style="  border: 5px solid #d737dc79; border-radius:10px; padding:10px ;  background: #d737dc79; " >

               <span class="icon"><img src="https://img.icons8.com/external-flaticons-lineal-color-flat-icons/64/undefined/external-fashion-designer-modelling-agency-flaticons-lineal-color-flat-icons-5.png"/></span>
                <div class="card-body">
                    <h5 class="card-title fw-bold ">Fashion designern</h5>
                    <p class="card-text fw-bold fs-3">Totale Fashion designer Anastasia</p>
                    <H1> <?php 
                        $designer = new AdministrateurController();
                        echo count($designer->getAlldesigner());
                               
                        ?>
                </H1>
                </div>
            </div>
        </div>
        <div class="col col-md-5 col-sm-10">
        <div class="card h-100 " style="  border: 5px solid #5b37dc79; border-radius:10px; padding:10px ;   background: #5b37dc79;">

            <span class="icon"><img src="https://img.icons8.com/external-flaticons-flat-flat-icons/64/undefined/external-client-public-relations-agency-flaticons-flat-flat-icons-3.png"/></span>
                <div class="card-body">
                <h5 class="card-title fw-bold ">Cliens Anastasia</h5>
                    <p class="card-text fw-bold fs-3">Totale Client Anastasia</p>
                    <H1> 
                        <?php  
                        $client = new AdministrateurController();
                        echo count($client->getAllClient());
                        ?>
                </H1>
                </div>
            </div>
        </div>
        <div class="col col-md-5 col-sm-10">
        <div class="card h-100 " style="  border: 5px solid #ab64a26a; border-radius:10px; padding:10px ;  background: #ab64a26a;  box-shadow: #c765ba;">

               <span class="icon"><img src="https://img.icons8.com/doodle/64/undefined/used-product.png"/></span>
                <div class="card-body">
                    <h5 class="card-title fw-bold ">Product Anastasia</h5>
                    <p class="card-text fw-bold fs-3"><?php 
                   $admine = new AdministrateurController();
                  echo count($admine->getAllproduit());            
                  ?></p>
                </div>
            </div>
        </div>
    </div>
    
    </div>  



</div> 
	

</body>
</html>
