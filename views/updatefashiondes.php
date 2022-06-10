
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
    <title> dachbord  fashion designer</title>
    <link rel="stylesheet" href="././public/css/dachbord.css">

</head>
<body>

<div class="wrapper">

      <div class="container">
         <form class="form-container p-4" action="operation" id="form1" method="POST" data-parsley-validate style="background-color:#ab64a26a;">
           <div class="mb-3 fw-bold">
                               
           <label for="exampleFormControlInput1" class="form-label"> Nom</label>
            <input type="text" class="form-control" id="nomdesignerupd" name="nomdesignerupd"  style="margin-bottom: 32px;" data-parsley-length="[4, 20]" data-parsley-trigger="change" required>
            </div>
           <div class="mb-3 fw-bold">
                               
           <label for="exampleFormControlInput1" class="form-label">Prenom </label>
            <input type="text" class="form-control" id="prendesignerupd" name="prendesignerupd"  style="margin-bottom: 32px;" data-parsley-length="[4, 20]" data-parsley-trigger="change" required>
            </div>
           <div class="mb-3 fw-bold">
                               
           <label for="exampleFormControlInput1" class="form-label">CIN</label>
            <input type="text" class="form-control" id="cindesignerupd" name="cindesignerupd"  style="margin-bottom: 32px;" data-parsley-length="[4, 20]" data-parsley-trigger="change" required>
            </div>
           <div class="mb-3 fw-bold">
                               
           <label for="exampleFormControlInput1" class="form-label">Nom complet</label>
            <input type="text" class="form-control" id="nomadminupd" name="nomadminupd"  style="margin-bottom: 32px;" data-parsley-length="[4, 20]" data-parsley-trigger="change" required>
            </div>
            
            <div class="mb-3  fw-bold">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="email" data-parsley-type="email" class="form-control" id="emaindesignerupd" name="emaindesignerupd"required data-parsley-trigger="change">
             </div>
             <div class="mb-3  fw-bold">
                <label for="exampleFormControlInput1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="pwddesignerupd" name="pwddesignerupd" required data-parsley-trigger="change">
             </div>
             <input type="button"  class="btn btn-outline-warning btn-lg fw-bold  " style="background-color:#ab64a26a; color:#410839" name="Addadmin" value="Modifier fashion designer ">

        </form>
  
      </div>
    </div>
  
	

</body>
</html>
