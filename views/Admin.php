
<! DOCTYPE html>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
    <title> dachbord admin</title>
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
                        
                    <button type="button" class="btn btn-outline btn-lg fw-bold mb-3 " style="background-color:#ab64a26a; margin-left: 67px; margin-top: 75px;" data-bs-toggle="modal" data-bs-target="#exampleModal"> Admin Anasatasia <img src="https://img.icons8.com/color/48/undefined/administrator-male-skin-type-7.png" style="width: 40px;height: 40px;"></button>
                    </div>
                   
                </div>
            </div>
            <div class="table-responsive " style=" margin-left: 94px;">
                <table class="table table-striped table align-middle" id="myTable" style="width: 1580px;">
                    <thead>
                            <th >id</th>
                            <th>Nom </th>
                            <th>Prenom</th>
                            <th>Role</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody class="fw-bold">
                
                
                        <tr class="bg-blue">
                        <?php 
                            $admine = new AdministrateurController();
                            $admines=$admine->getAlladmin();
                            foreach($admines as $admine){
                            
                        ?>
                        <tr>
                            <td><?php echo $admine['id_user']?></td>
                            <td><?= $admine['nom_user'] ?></td>
                            <td><?= $admine['prenom_user'] ?></td>
                            <td><?= $admine['role_user'] ?></td>
                            <td><?= $admine['email_user'] ?></td>
                            <td><?= $admine['password_user'] ?></td>
                            <td class="d-flex  align-items-start">
                            <button name="idadmine" class="btn btn-outline-primary  fw-bold update" ><a href="" style="  color:primary"  data-bs-toggle="modal" data-bs-target="#myModel"><img src="https://img.icons8.com/fluency/30/undefined/edit-user-female.png"/></a></button>
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

      <!-- update  Admin-->
    <div class="modal fade" id="myModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Admine </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="form-container" action="operation" method="POST" data-parsley-validate="">  
                        <div class="mb-3  fw-bold"  >
                            <input type="text" class="form-control" hidden  name="idadmine" id="idadmin"  >
    
                        </div>
                        <div class="mb-3  fw-bold"  >
                            <label for="exampleFormControlInput1" class="form-label">Nom  </label>
                            <input type="text" class="form-control" name="updnamAdmie" id="updnamAdmi"   data-parsley-error-message="Veuillez entrer le nom sof des  lettres " minlength="4" maxlength="10" data-parsley-trigger="change" required="">
                        </div>
                        <div class="mb-3  fw-bold"  >
                            <label for="exampleFormControlInput1" class="form-label">Prenom </label>
                            <input type="text" class="form-control" name="updprenAdmin" id="updprenAdmi"   data-parsley-error-message="Veuillez entrer le nom sof des  lettres " minlength="4" maxlength="10" data-parsley-trigger="change" required="">
                        </div>
                        <div class="mb-3  fw-bold">
                            <label for="exampleFormControlInput1" class="form-label">Role</label><br>
                            <select name="roleupd" id="roleadm">
                                <option value="Admin">Admin</option>
                            </select>
                        </div   
                        <div class="mb-3  fw-bold"  >
                            <label for="exampleFormControlInput1" class="form-label">Email</label>
                            <input type="text" class="form-control" name="updemailadme" id="updemailadm"   data-parsley-error-message="This value is required.   " minlength="8" maxlength="22" data-parsley-trigger="change" required="">
                        </div>
                        <div class="mb-3  fw-bold"  >
                            <label for="exampleFormControlInput1" class="form-label">Password</label>
                            <input type="text" class="form-control" name="UpdpasswordAdmine" id="UpdpasswordAdmin"   data-parsley-error-message="Veuillez entrer le mot de passe entre 4 et 8 " minlength="4" maxlength="10" data-parsley-trigger="change" required="" >
                        </div>
                        <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" name="updateAdmin" class="btn btn-primary ">update</button>
                        </div>
                    </form>              
                </div>
                <div class="modal-footer">
                
                </div>
            </div>
        </div>
    
    </div>


</body>
</html>
<script>
    $(document).ready(function(){

    $("#myTable").on('click','.update',function(){
        
        var coluodateadmin=$(this).closest("tr"); 
        colnomcoplid=coluodateadmin.find("td:eq(0)").text(); 
        colnomadupd=coluodateadmin.find("td:eq(1)").text(); 
        colpreadmupd=coluodateadmin.find("td:eq(2)").text(); 
        colroladmupd=coluodateadmin.find("td:eq(3)").text(); 
        colemailadm=coluodateadmin.find("td:eq(4)").text(); 
        colpwdadm=coluodateadmin.find("td:eq(5)").text(); 
        $('#idadmin').val(colnomcoplid);
        $('#updnamAdmi').val(colnomadupd);
        $('#updprenAdmi').val(colpreadmupd);
        $('#roleadm').val(colroladmupd);
        $('#updemailadm').val(colemailadm);
        $('#UpdpasswordAdmin').val(colpwdadm);


        }
       )
    })
</script>