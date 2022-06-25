
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
    tr:hover{
        background: #b72da4a4 !important;
        color: #410839 !important;
        cursor: pointer !important;
        
    }
    
    
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
    <title>produiddesigner</title>
    <link rel="stylesheet" href="././public/css/dachbord.css">
    <!-- <link href="././public/css/admin.css" rel="stylesheet" /> -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js%22%3E"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js%22%3"></script>
    <link rel="stylesheet" type="text/css" href="http://parsleyjs.org/src/parsley.css" />

</head>
<body>

<div class="container-fluid mt-5">
        <div class="d-flex justify-content-center row" style="margin-top: 82px;">
            <div class="row">

                    <div class="col">
                    <button type="button" class="btn btn-outline btn-lg fw-bold mb-3 fd" style="background-color:#b72da4a4;" data-bs-toggle="modal" data-bs-target="#exampleModal" > Ajouter un Produit <img src="https://img.icons8.com/doodle/34/undefined/used-product.png"/> </button>
                    </div>
                    </div>
                    <div class="mt-3">
                        <div class="table-responsive">
                    <table class="table table-striped table " id="myTable">
                        <thead>
                        <div id="liveAlertPlaceholder"></div>

                            <tr style=" background-color: #b72da4a4;">
                                <th>ID_produit</th>
                                <th>produit</th>
                                <th >image</th>
                                <th>discription</th>
                                <th>la taille</th>
                                <th>prix</th>
                                <th>Quantiter</th>
                                <th>id_designer</th>
                                <th>Options </th>
                            </tr>
                        </thead>
                        <tbody class="fw-bold">
                            <tr class="bg-product">
                            <?php 
                                $products=new AdministrateurController();
                                $product=$products->getaproduct();
                                foreach($product as $products){
                             ?>
                                <td><?= $products['id_produit'] ?></td>
                                <td><?= $products['nom_produit'] ?></td>
                                <td><?= $products['image_produit'] ?></td>
                                <td><?= $products['discription_produit'] ?></td>
                                <td><?= $products['Taille'] ?></td>
                                <td><?= $products['prix_produit'] ?></td>
                                <td><?= $products['quantiter_produit'] ?></td>
                                <td><?= $products['id_user_product'] ?></td>
                                <td class="d-flex  align-items-start">
                                    <button name="updproduite" class="btn btn-outline-primary  fw-bold updateproduc" ><a href="" style="  color:primary"  data-bs-toggle="modal" data-bs-target="#myModel"><img src="https://img.icons8.com/fluency/30/undefined/edit-user-female.png"/></a></button>
                                    <form  action="operation"   onclick="return confirm('Êtes vous sur de vouloir supprimer ??!!');" method="POST" ><button type="submit" name ="deletProduit" class="btn btn-outline-danger " style=" margin-left: 10PX;" data-toggle="modal">
                                        <input type="text" hidden name="updproduite" value="<?= $products['id_produit']  ?> "><img src="https://img.icons8.com/color/30/undefined/delete-forever.png"/></button>
                                    </form> 
                                </td>
                            </tr>
                            <?php } ?>  
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
                <form class="form-container" action="operation" id="form1" method="POST" data-parsley-validate="" enctype="multipart/form-data">
                <div class="mb-3 fw-bold">
                        <label for="exampleFormControlInput1" class="form-label">produit </label>
                        <input type="text" class="form-control" id="prodajouterr" name="prodajouter" placeholder="Enter nom" style="margin-bottom: 32px;" minlength="4"  maxlength="30" data-parsley-trigger="change" required>
                </div>
                <div class="mb-3 fw-bold">
                        <label for="exampleFormControlInput1" class="form-label" ></label>
                        <input type="file" class="form-control" id="imgproduit" name="imgproduit" placeholder="Enter image de produit " style="margin-bottom: 32px;" data-parsley-trigger="change" required accept=".jpg,.jpeg,.png">
                    </div>
                <div class="mb-3 fw-bold">
                        <label for="exampleFormControlInput1" class="form-label">discription</label>
                        <textarea   rows="10" type="text" class="form-control" id="discriptionproduit"  data-parsley-words="[10,200]"	  name="discrip" placeholder="Enter dicription" style="margin-bottom: 32px;"  data-parsley-trigger="change" ></textarea>
                </div>
                <div class="mb-3 fw-bold">
                <label for="cars">Ajouter la taille:</label>
                    <select name="taille_produ" id="taille_prod"  data-parsley-error-message="This value is required." data-parsley-trigger="change" required="">
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                    <option value="XXL">XXL</option>
                    </select>
                </div>
                <div class="mb-3 fw-bold">
                        <label for="exampleFormControlInput1" class="form-label">prix</label>
                        <input type="number" class="form-control" id="prixproduit"  min="1" max="800" name="prixproduit" placeholder="Enter le prix"  style="margin-bottom: 32px;" data-parsley-trigger="change" required>
                    </div>
   
                    
                    <div class="mb-3  fw-bold">
                        <label for="exampleFormControlInput1" class="form-label">Quantiter</label>
                            <input type="number" data-parsley-type="email" class="form-control" id="quantproduit" name="quantproduit" placeholder="Enter la quantiter"  min="1" max="30" required data-parsley-trigger="change">
                    </div>
                    <input type="submit" name="addoroduct" class="btn btn-outline-warning btn-lg " style="background-color:#410839c3; color:aliceblue"  id="liveAlertBtn" value="Ajouter product">
                    <button type="button"  class="btn btn-secondary btn-lg" data-bs-dismiss="modal">Close</button>

                </form>
                </div>
        </div>
        </div>

    </div>
    	<!-- modal
     -->
  <div class="modal fade" id="myModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update designer </h5>
                <button type="button" class="btn-close" required data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form class="form-container" action="operation" id="form1" method="POST" data-parsley-validate="">
                <div class="mb-3 fw-bold">
                        <!-- <label for="exampleFormControlInput1" class="form-label">id </label> -->
                        <input type="text"  hidden class="form-control" id="id_produit" name="updproduite" placeholder="Enter nom"   style="margin-bottom: 32px;" >
                 </div>
                <div class="mb-3 fw-bold">
                        <label for="exampleFormControlInput1" class="form-label">produit </label>
                        <input type="text" class="form-control" id="nomproduitupd" name="nomproduitupde" placeholder="Enter nom"  minlength="4" maxlength="15"  style="margin-bottom: 32px;" data-parsley-trigger="change" required>
                 </div>
                 <div class="mb-3 fw-bold">
                        <label for="exampleFormControlInput1" class="form-label"></label>
                        <input type="text" class="form-control" id="imgprodupde" name="imgprodupd" placeholder="Enter image de produit " style="margin-bottom: 32px;"  data-parsley-trigger="change" required>
                    </div>
                <div class="mb-3 fw-bold">
                        <label for="exampleFormControlInput1" class="form-label">discription</label>
                        <textarea   rows="10" type="text" class="form-control" id="discrupdprode" name="discrupdprod" placeholder="Enter dicription"  minlength="10" maxlength="100"  style="margin-bottom: 32px;"  data-parsley-trigger="change" required ></textarea>
                    </div>
                    <div class="mb-3 fw-bold">
                <label for="cars">Ajouter la taille:</label>
                    <select name="taille_produp" id="taille_produpd">
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                    <option value="XxL">XXL</option>
                    </select>
                </div>
                <div class="mb-3 fw-bold">
                        <label for="exampleFormControlInput1" class="form-label">prix</label>
                        <input type="text" class="form-control" id="prixprodupde" name="prixprodupd" placeholder="Enter le prix" style="margin-bottom: 32px;"  data-parsley-trigger="change" required>
                    </div>
               
                    
                    <div class="mb-3  fw-bold">
                        <label for="exampleFormControlInput1" class="form-label">Quantiter</label>
                            <input type="number" data-parsley-type="email" class="form-control" id="quantprodupde" name="quantprodupd" placeholder="Enter la quantiter" required data-parsley-trigger="change">
                    </div>
                    <button type="submit" name="updateproduct" class="btn btn-primary ">update designer</button>
                    <button type="button" class="btn  btn-lg" data-bs-dismiss="modal">Close</button>

                </form>     
                </div>
               
            </div>
        </div>
    
    </div>
  
	

</body>
</html>
<script>
        $(document).ready(function(){

        $("#myTable").on('click','.updateproduc',function(){
            
            var colupddeproduct=$(this).closest("tr");
            colidproduct=colupddeproduct.find("td:eq(0)").text();
            colnomprodupd=colupddeproduct.find("td:eq(1)").text(); 
            colimgprodupd=colupddeproduct.find("td:eq(2)").text(); 
            coldiscripupd=colupddeproduct.find("td:eq(3)").text(); 
            coltialleupdprd=colupddeproduct.find("td:eq(4)").text(); 
            colprixprodpd=colupddeproduct.find("td:eq(5)").text(); 
            colquitprodupd=colupddeproduct.find("td:eq(6)").text(); 
            $('#id_produit').val(colidproduct);
            $('#nomproduitupd').val(colnomprodupd);
            $('#imgprodupde').val(colimgprodupd);
            $('#discrupdprode').val(coldiscripupd);
            $('#taille_produpd').val(coltialleupdprd);
            $('#prixprodupde').val(colprixprodpd);
            $('#quantprodupde').val(colquitprodupd);


            }
        )
        })
    </script>
