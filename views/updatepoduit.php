
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
    <title> dachbord designer fashion</title>
    <link rel="stylesheet" href="../public/css/dachbord.css">

</head>
<body>

<div class="wrapper">
<?php require_once("../views/includes/sidebardesigner.php"); ?>

      <div class="container">
      <form class="form-container p-4" action="operation" id="form1" method="POST" data-parsley-validate style="background-color:#ab64a26a">
           <div class="mb-3 fw-bold">
                <label for="exampleFormControlInput1" class="form-label">produit </label>
                <input type="text" class="form-control" id="produitmodif" name="produitmodif"  style="margin-bottom: 32px;" data-parsley-length="[4, 20]" data-parsley-trigger="change" required>
            </div>
           <div class="mb-3 fw-bold">
                <label for="exampleFormControlInput1" class="form-label">discription</label>
                <textarea  type="text" class="form-control" id="discrprodmdf" name="discrprodmdf"  style="margin-bottom: 32px;" data-parsley-length="[4, 20]" data-parsley-trigger="change" ></textarea>
            </div>
           <div class="mb-3 fw-bold">
                <label for="exampleFormControlInput1" class="form-label">prix</label>
                <input type="text" class="form-control" id="prixprodmdf" name="prixprodmdf" style="margin-bottom: 32px;" data-parsley-length="[4, 20]" data-parsley-trigger="change" required>
            </div>
           <div class="mb-3 fw-bold">
                <label for="exampleFormControlInput1" class="form-label"></label>
                <input type="file" class="form-control" id="imgprodmdf" name="imgprodmdf"  style="margin-bottom: 32px;" data-parsley-length="[4, 20]" data-parsley-trigger="change" required>
            </div>
            
            <div class="mb-3  fw-bold">
                <label for="exampleFormControlInput1" class="form-label">Quantiter</label>
                    <input type="number"  class="form-control" id="quantprdmodf" name="quantprdmodf"  required data-parsley-trigger="change">
             </div>
             <input type="button"  class="btn btn-outline-warning  " style="background-color:#410839c3; color:aliceblue"  name="modifproduit " value="Modifier produit">

        </form>
  
      </div>
    </div>
  
	

</body>
</html>
