
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
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js%22%3E"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js%22%3"></script>
    <link rel="stylesheet" type="text/css" href="http://parsleyjs.org/src/parsley.css" />

</head>
<body>

<div class="container-fluid mt-5">
        <div class="d-flex justify-content-center row" style="margin-top: 82px;">
        
            <div class="row">
                <div class="col-md-6 text-right mt-3">
                <button type="button" class="btn btn-outline btn-lg fw-bold mb-3 fd" style="background-color:#ab64a26a; " data-bs-toggle="modal" data-bs-target="#exampleModal">Ajouter Designer Fashion<img src="https://img.icons8.com/external-flaticons-lineal-color-flat-icons/45/undefined/external-fashion-lifestyles-flaticons-lineal-color-flat-icons-4.png"/> </button>
            </div>
           
                    <div class="mt-3">
                        <div class="table-responsive">
                        <table class="table table-striped " id="myTable">
                        <thead>
                        <tr style="  background-color:#410839c3; color:aliceblue">
                            <th >id</th>
                            <th>Nom </th>
                            <th>Prenom </th>
                            <th>Role </th>
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

                                <td><?= $designer['id_user'] ?></td>
                                <td><?= $designer['nom_user'] ?></td>
                                <td><?= $designer['prenom_user'] ?></td>
                                <td><?= $designer['role_user'] ?></td>
                                <td><?= $designer['email_user'] ?></td>
                                <td><?= $designer['password_user']?></td>
                                    <td class="d-flex  align-items-start">
                                        <button name="iddesignere" class="btn btn-outline-primary  fw-bold updatefachdesg" ><a href="" style="  color:primary"  data-bs-toggle="modal" data-bs-target="#myModel"><img src="https://img.icons8.com/fluency/30/undefined/edit-user-female.png"/></a></button>
                                        <form  action="operation"   onclick="return confirm('Êtes vous sur de vouloir supprimer ??!!');" method="POST" ><button type="submit" name ="deletdesigner" class="btn btn-outline-danger " style=" margin-left: 10PX;" data-toggle="modal">
                                            <input type="text" hidden name="iddesignere" value="<?= $designer['id_user'] ?> "><img src="https://img.icons8.com/color/30/undefined/delete-forever.png"/></button>
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

</div
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
                            <div class="mb-3  fw-bold">
                                    <label for="exampleFormControlInput1" class="form-label">Role</label><br>
                                    <select name="role" id="role">
                                        <option value="Designer">Designer</option>
                                    </select>
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
                      
                        <div class="mb-3  fw-bold">
                            <label for="exampleFormControlInput1" class="form-label">Role</label><br>
                            <select name="roleupd" id="role">
                                <option value="designer">Designer</option>
                            </select>
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
            coliddesupd=colupddesigner.find("td:eq(0)").text(); 
            colnomdesupd=colupddesigner.find("td:eq(1)").text(); 
            colprendesupd=colupddesigner.find("td:eq(2)").text(); 
            colroleupd=colupddesigner.find("td:eq(3)").text(); 
            colemaildesupd=colupddesigner.find("td:eq(4)").text(); 
            colpwddesupd=colupddesigner.find("td:eq(5)").text(); 
            $('#id_designer').val(coliddesupd);
            $('#nomdesfasupde').val(colnomdesupd);
            $('#prenomdesfasupde').val(colprendesupd);
            $('#role').val(colprendesupd);
            $('#emaildesfasupde').val(colemaildesupd);
            $('#passworddesfasupde').val(colpwddesupd);


            }
        )
        })
    </script>