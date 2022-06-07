
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
    <title>productanastasia</title>
    <link rel="stylesheet" href="../public/css/dachbord.css">
    <link href="../public/css/admin.css" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
<?php require_once("../views/includes/sidbaradm.php"); ?>

    <div class="">
             

        <div class="" >
            <div class="  mt-3 table-wrapper" style="height:100vh">
                    <div class="table-title">
                        <div class="">
                            <div class="col">
                                
                            <button type="button" class="btn btn-outline btn-lg fw-bold mb-3 fd" style="background-color:#ab64a26a; margin-left: 67px; margin-top: 75px;" data-bs-toggle="modal" data-bs-target="#exampleModal">Product Anastasia<img src="https://img.icons8.com/doodle/64/undefined/used-product.png"/> </button>
                            <!-- <a href="#addetud"   data-bs-toggle="modal" databs-target="#exampleModal">ADD Admin <img src="https://img.icons8.com/color/48/undefined/administrator-male-skin-type-7.png" style="width: 40px;height: 40px;"></a> -->
                            </div>
                        
                        </div>
                    </div>
                    <div class="table-responsive " style=" margin-left: 94px;">
                    <table class="table table-striped table align-middle" id="myTable">
                        <thead>
                            <tr style=" background-color: #ab64a26a;">
                                <th >id</th>
                                <th>produit</th>
                                <th>discription</th>
                                <th>prix</th>
                                <th>Quantiter</th>
                                <th>produit ajouté par : </th>
                            </tr>
                        </thead>
                        <tbody class="fw-bold">
                            <tr class="bg-product">
                                <td >1</td>
                                <td class="text-nowrap">produit A </td>
                                <td class="text-nowrap">discription</td>
                                <td class="text-nowrap">300dh</td>
                                <td class="text-nowrap">30</td>
                                <td class="text-nowrap">creaTeur X</td>
                            </tr>
                            <tr id="spacing-row">
                            <td></td>
                            </tr>
                       
                            <tr class="bg-product">
                                <td >1</td>
                                <td class="text-nowrap">produit A </td>
                                <td class="text-nowrap">discription</td>
                                <td class="text-nowrap">300dh</td>
                                <td class="text-nowrap">30</td>
                                <td class="text-nowrap">creaTeur X</td>
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

</div>
  
	

</body>
</html>
