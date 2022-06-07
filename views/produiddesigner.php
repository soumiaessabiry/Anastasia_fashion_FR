
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
    <title>produiddesigner</title>
    <link rel="stylesheet" href="../public/css/dachbord.css">
    <link href="../public/css/admin.css" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
<?php require_once("../views/includes/sidebardesigner.php"); ?>

    <div class="">
            <div class="  mt-3 table-wrapper" style="height:85vh">
                    <div class="table-title">
                        <div class="">
                            <div class="col">
                            <button type="button" class="btn btn-outline btn-lg fw-bold mb-3 fd" style="background-color:#b72da4a4; margin-left: 67px; margin-top: 75px;" data-bs-toggle="modal" data-bs-target="#exampleModal" > Ajouter un Produit <img src="https://img.icons8.com/doodle/64/undefined/used-product.png"/> </button>
                            <!-- <a href="#addetud"   data-bs-toggle="modal" databs-target="#exampleModal">ADD Admin <img src="https://img.icons8.com/color/48/undefined/administrator-male-skin-type-7.png" style="width: 40px;height: 40px;"></a> -->
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive " style=" margin-left: 94px;">
                    <table class="table table-striped table align-middle" id="myTable">
                        <thead>
                            <tr style=" background-color: #b72da4a4;">
                                <th >id</th>
                                <th>produit</th>
                                <th >image</th>
                                <th>discription</th>
                                <th>prix</th>
                                <th>Quantiter</th>
                                <th>Options </th>
                            </tr>
                        </thead>
                        <tbody class="fw-bold">
                            <tr class="bg-product">
                                <td >1</td>
                                <td class="text-nowrap">produit A </td>
                                <td class="text-nowrap">image </td>
                                <td class="text-nowrap">discription</td>
                                <td class="text-nowrap">300dh</td>
                                <td class="text-nowrap">30</td>
                                <td class="d-flex  align-items-start">
                                <a href="../views/updatepoduit.php"><img src="https://img.icons8.com/fluency/30/undefined/edit-user-female.png"/></a>
                                <a href="#"><img src="https://img.icons8.com/color/30/undefined/delete-forever.png"/></a>
                            </td>
                            </tr>
                            <tr id="spacing-row">
                            <td></td>
                            </tr>
                            <tr class="bg-product">
                                <td >1</td>
                                <td class="text-nowrap">produit A </td>
                                <td class="text-nowrap">image </td>
                                <td class="text-nowrap">discription</td>
                                <td class="text-nowrap">300dh</td>
                                <td class="text-nowrap">30</td>
                                <td class="d-flex  align-items-start">
                                <a href="../views/updatepoduit.php"><img src="https://img.icons8.com/fluency/30/undefined/edit-user-female.png"/></a>
                                <a href="#"><img src="https://img.icons8.com/color/30/undefined/delete-forever.png"/></a>
                            </td>
                            </tr>
                            <tr id="spacing-row">
                            <td></td>
                            </tr>
                       
                            
                        </tbody>
                    </table>
                    </div>
            </div>

        </div>

    </div>
    <!-- modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
     <div class="modal-content">
       <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ajouter un produit </h5>
           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form class="form-container" action="operation" id="form1" method="POST" data-parsley-validate>
           <div class="mb-3 fw-bold">
                <label for="exampleFormControlInput1" class="form-label">produit </label>
                <input type="text" class="form-control" id="produitajout" name="produitajout" placeholder="Enter nom" style="margin-bottom: 32px;" data-parsley-length="[4, 20]" data-parsley-trigger="change" required>
            </div>
           <div class="mb-3 fw-bold">
                <label for="exampleFormControlInput1" class="form-label">discription</label>
                <textarea   rows="10" type="text" class="form-control" id="discriptionproduit" name="discriptionproduit" placeholder="Enter dicription" style="margin-bottom: 32px;" data-parsley-length="[4, 20]" data-parsley-trigger="change" ></textarea>
            </div>
           <div class="mb-3 fw-bold">
                <label for="exampleFormControlInput1" class="form-label">prix</label>
                <input type="text" class="form-control" id="prixproduit" name="prixproduit" placeholder="Enter le prix" style="margin-bottom: 32px;" data-parsley-length="[4, 20]" data-parsley-trigger="change" required>
            </div>
           <div class="mb-3 fw-bold">
                <label for="exampleFormControlInput1" class="form-label"></label>
                <input type="file" class="form-control" id="imgproduit" name="imgproduit" placeholder="Enter image de produit " style="margin-bottom: 32px;" data-parsley-length="[4, 20]" data-parsley-trigger="change" required>
            </div>
            
            <div class="mb-3  fw-bold">
                <label for="exampleFormControlInput1" class="form-label">Quantiter</label>
                    <input type="number" data-parsley-type="email" class="form-control" id="quantproduit" name="quantproduit" placeholder="Enter la quantiter" required data-parsley-trigger="change">
             </div>
             <input type="button"  class="btn btn-outline-warning btn-lg " style="background-color:#410839c3; color:aliceblue"  name="addproduit " value="Ajouter un produit">
             <button type="button" class="btn btn-secondary btn-lg" data-bs-dismiss="modal">Close</button>

        </form>
        </div>
</div>
</div>

</div>
  
	

</body>
</html>
