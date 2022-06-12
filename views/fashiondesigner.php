
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
    li {
        color: red !important;
        font-weight: bold !important;
    }
    
    
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
    <title>Fashiondesigner</title>
    <link rel="stylesheet" href="././public/css/dachbord.css">
    <link href="././public/css/admin.css" rel="stylesheet" />

</head>
<body>

<div class="wrapper">

             
<div class="container-fluid"style="padding-left: 0px;margin-left: 159px;margin-top: 0px; margin-right:0px;" >
        <div class="  mt-3 table-wrapper" style="height:100vh">
            <div class="table-title">
                <div class="">
                    <div class="col">
                        
                    <button type="button" class="btn btn-outline btn-lg fw-bold mb-3 fd" style="background-color:#ab64a26a; margin-left: 67px; margin-top: 75px;" data-bs-toggle="modal" data-bs-target="#exampleModal">Ajouter Designer Fashion<img src="https://img.icons8.com/external-flaticons-lineal-color-flat-icons/45/undefined/external-fashion-lifestyles-flaticons-lineal-color-flat-icons-4.png"/> </button>
                    </div>
                   
                </div>
            </div>
            <div class="table-responsive " style="margin-left: 94px;">
                <table class="table table-striped table align-middle" id="myTable" style="width: 1580px;">
                    <thead>
                        <tr style="  background-color:#410839c3; color:aliceblue">
                            <th >Profil</th>
                            <th >id</th>
                            <th>Nom </th>
                            <th>Prenom </th>
                            <th>CIN </th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody class="fw-bold">
                        <tr class="bg-blue">

                            <?php 
                            $designer = new AdministrateurController();
                            $designes=$designer->getAlldesigner();
                            foreach($designes as $designer){
                             ?>

                            <tr>
                                <td  style="width:50px;"><?= $designer['profil_designer'] ?></td>
                                <td><?= $designer['id_designer'] ?></td>
                                <td><?= $designer['nom_designer'] ?></td>
                                <td><?= $designer['prenom_designer'] ?></td>
                                <td><?= $designer['cin_designer'] ?></td>
                                <td><?= $designer['email_designer'] ?></td>
                                <td><?= $designer['password_designer'] ?></td>
                                    <td class="d-flex  align-items-start">
                                        <button name="iddesignere" class="btn btn-outline-primary  fw-bold updatefachdesg" ><a href="" style="  color:primary"  data-bs-toggle="modal" data-bs-target="#myModel"><img src="https://img.icons8.com/fluency/30/undefined/edit-user-female.png"/></a></button>
                                        <form  action="operation"   onclick="return confirm('Êtes vous sur de vouloir supprimer ??!!');" method="POST" ><button type="submit" name ="deletdesigner" class="btn btn-outline-danger " style=" margin-left: 10PX;" data-toggle="modal">
                                            <input type="text" hidden name="iddesignere" value="<?= $designer['id_designer'] ?> "><img src="https://img.icons8.com/color/30/undefined/delete-forever.png"/></button>
                                        </form> 
                                    </td>
                                
                            </tr>
                            <?php } ?>  
                            <tr id="spacing-row">
                            <td></td>
                            </tr>
                        
                                
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

</div>

</div>
<!-- model add Admin -->
   <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ajouter Fachion designer</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="form-container" action="operation" id="form1" method="POST" data-parsley-validate="">
                        <div class="mb-3 fw-bold">
                                <label for="exampleFormControlInput1" class="form-label">Nom </label>
                                <input type="text" class="form-control" id="nomdesfas" name="nomdesfas" placeholder="Enter nom" style="margin-bottom: 32px;"   data-parsley-error-message="This value is required.   " minlength="4" maxlength="12" data-parsley-trigger="change" required=""  >
                            </div>
                        <div class="mb-3 fw-bold">
                                <label for="exampleFormControlInput1" class="form-label">Prenom</label>
                                <input type="text" class="form-control" id="prenomdesfas" name="prenomdesfas" placeholder="Enter prenom" style="margin-bottom: 32px;"   data-parsley-error-message="This value is required.   " minlength="4" maxlength="12" data-parsley-trigger="change" required=""  >
                            </div>
                        <div class="mb-3 fw-bold">
                                <label for="exampleFormControlInput1" class="form-label">CIN</label>
                                <input type="text" class="form-control" id="cindesfas" name="cindesfas" placeholder="Enter CIN" style="margin-bottom: 32px;"   data-parsley-error-message="This value is required.   " minlength="8" maxlength="8" data-parsley-trigger="change" required=""  >
                            </div>
                            <div class="mb-3 fw-bold">
                                <label for="exampleFormControlInput1" class="form-label"></label>
                                <input type="file" class="form-control" id="profdesfas" name="profdesfas" placeholder="Enter profil" style="margin-bottom: 32px;"   data-parsley-error-message="This value is required.   " data-parsley-trigger="change" required=""  >
                            </div>
                            
                            <div class="mb-3  fw-bold">
                                <label for="exampleFormControlInput1" class="form-label">Email</label>
                                    <input type="email" data-parsley-type="email" class="form-control" id="emaildesfas" name="emaildesfas" placeholder="Enter Email" data-parsley-error-message="This value is required.   " minlength="6" maxlength="30" data-parsley-trigger="change" required="">
                            </div>
                            <div class="mb-3  fw-bold">
                                <label for="exampleFormControlInput1" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="passworddesfas" name="passworddesfas" placeholder="Enter password"   data-parsley-error-message="This value is required.   " minlength="4" maxlength="10" data-parsley-trigger="change" required="">
                            </div>
                            <input type="submit" name="Adddesigner"  class="btn btn-outline-warning btn-lg " style="background-color:#410839c3; color:aliceblue"  name="adddesfas" value="Ajouter fashion designer">
                            <button type="button" class="btn btn-secondary btn-lg" data-bs-dismiss="modal">Close</button>

                    </form>
                </div>
            </div>
        </div>
    </div>

  <!-- Update designer -->
	
  <div class="modal fade" id="myModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update designer </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="form-container" action="operation"  method="POST" data-parsley-validate="">
                   
                        <div class="mb-3  fw-bold"  >
                            <input type="text" class="form-control"  hidden name="iddesignere" id="id_designer"  >

                        </div>   
                         <div class="mb-3 fw-bold">
                            <label for="exampleFormControlInput1" class="form-label">Nom </label>
                            <input type="text" class="form-control" id="nomdesfasupde" name="nomdesfasupd" placeholder="Enter nom" style="margin-bottom: 32px;"    minlength="4" maxlength="10" data-parsley-trigger="change" required=""  >
                        </div>
                        <div class="mb-3 fw-bold">
                            <label for="exampleFormControlInput1" class="form-label">Prenom</label>
                            <input type="text" class="form-control" id="prenomdesfasupde" name="prenomdesfasupd" placeholder="Enter prenom" style="margin-bottom: 32px;"    minlength="4" maxlength="10" data-parsley-trigger="change" required=""  >
                        </div>
                        <div class="mb-3 fw-bold">
                            <label for="exampleFormControlInput1" class="form-label">CIN</label>
                            <input type="text" class="form-control" id="cindesfasupde" name="cindesfasupd" placeholder="Enter CIN" style="margin-bottom: 32px;"     minlength="8" maxlength="8" data-parsley-trigger="change" required=""  >
                         </div>
                         <div class="mb-3 fw-bold">
                            <label for="exampleFormControlInput1" class="form-label"></label>
                            <input type="text" class="form-control" id="profdesfasupde" name="profdesfasupd" placeholder="Enter profil" style="margin-bottom: 32px;"    data-parsley-trigger="change" required=""  >
                        </div>
                        
                        <div class="mb-3  fw-bold">
                            <label for="exampleFormControlInput1" class="form-label">Email</label>
                            <input type="email" data-parsley-type="email" class="form-control" id="emaildesfasupde" name="emaildesfasupd" placeholder="Enter Email"  minlength="8" maxlength="30" data-parsley-trigger="change" required="">
                        </div>
                        <div class="mb-3  fw-bold">
                            <label for="exampleFormControlInput1" class="form-label">Password</label>
                            <input type="text" class="form-control" id="passworddesfasupde" name="passworddesfasupd" placeholder="Enter password"    minlength="4" maxlength="12" data-parsley-trigger="change" required="">
                        </div>
                        <button type="submit" name="updatfach" class="btn btn-primary ">update designer</button>
                        <button type="button" class="btn btn-secondary btn-lg" data-bs-dismiss="modal">Close</button>

                    </form>         
                </div>
               
            </div>
        </div>
    
    </div>

</body>
</html>
    <script>
        $(document).ready(function(){

        $("#myTable").on('click','.updatefachdesg',function(){
            
            var colupddesigner=$(this).closest("tr");
            colprofdesigupd=colupddesigner.find("td:eq(0)").text(); 
            coliddesupd=colupddesigner.find("td:eq(1)").text(); 
            colnomdesupd=colupddesigner.find("td:eq(2)").text(); //*
            colprendesupd=colupddesigner.find("td:eq(3)").text(); //*
            colcindesiupd=colupddesigner.find("td:eq(4)").text(); //*
            colemaildesupd=colupddesigner.find("td:eq(5)").text(); 
            colpwddesupd=colupddesigner.find("td:eq(6)").text(); 
            $('#id_designer').val(coliddesupd);
            $('#nomdesfasupde').val(colnomdesupd);
            $('#prenomdesfasupde').val(colprendesupd);
            $('#cindesfasupde').val(colcindesiupd);
            $('#profdesfasupde').val(colprofdesigupd);
            $('#emaildesfasupde').val(colemaildesupd);
            $('#passworddesfasupde').val(colpwddesupd);


            }
        )
        })
    </script>