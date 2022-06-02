<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
    <link href="../public/css/styles.css" rel="stylesheet" />
    <link href="../public/css/admin.css" rel="stylesheet" />
    <title>Admin</title>
</head>
<body>
<div class="">
<div class="mb-4" >
<nav class="  navbar navbar-expand-lg navbar-light " style="background:rgb(203, 150, 16);">
        <div class="container px-lg-5">
            <a class="navbar-brand" href="#!"><img src="../public/image/logo.jpg" style="width:70PX;border-radius: 20px;" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="../views/home.php">Profil</a></li>
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="../views/home.php">Admins</a></li>
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="../views/home.php">desiner fashion</a></li>
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="../views/home.php">Product</a></li>
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="../views/home.php">Commands</a></li>
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="../views/home.php">Sign out</a></li>
                </ul>
            </div>
        </div>
</nav>
</div>
 <!-- table -->
    <div class="" >
            <div class=" mx-2 mt-3 table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                        <button type="button" class="btn btn-outline-warning btn-lg fw-bold mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">ADD Admin <img src="https://img.icons8.com/color/48/undefined/administrator-male-skin-type-7.png" style="width: 40px;height: 40px;"></button>
                        <!-- <a href="#addetud"   data-bs-toggle="modal" data-bs-target="#exampleModal">ADD Admin <img src="https://img.icons8.com/color/48/undefined/administrator-male-skin-type-7.png" style="width: 40px;height: 40px;"></a> -->
                        </div>
                       
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table align-middle" id="myTable">
                        <thead>
                            <tr style="  background-color: rgba(234, 209, 109, 0.867);">
                                <th >id</th>
                                <th>Nom complet</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody class="fw-bold">
                                    <tr class="bg-blue">
                                        <td >1</td>
                                        <td class="text-nowrap">ADMIN</td>
                                        <td class="text-nowrap">admin@gmail.com</td>
                                        <td class="text-nowrap">2001</td>
                                        <td class="d-flex  align-items-start">
                                            <a href="../views/Updatadmin.php"><img src="https://img.icons8.com/fluency/30/undefined/edit-user-female.png"/></a>
                                            <a href="#"><img src="https://img.icons8.com/color/30/undefined/delete-forever.png"/></a>
                                        </td>
                                    </tr>
                                    <tr id="spacing-row">
                                    <td></td>
                                    </tr>
                                    <tr class="bg-blue">
                                        <td >1</td>
                                        <td class="text-nowrap">ADMIN</td>
                                        <td class="text-nowrap">admin@gmail.com</td>
                                        <td class="text-nowrap">2001</td>
                                        <td class="d-flex  align-items-start">
                                            <a href="#"><img src="https://img.icons8.com/fluency/30/undefined/edit-user-female.png"/></a>
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
<!-- model add Admin -->
       <!-- Modal -->
       <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
         <div class="modal-content">
           <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add Admin</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
			<form class="form-container" action="operation" id="form1" method="POST" data-parsley-validate>
               <div class="mb-3 fw-bold">
                                    <label for="exampleFormControlInput1" class="form-label">Nom complet</label>
                                    <input type="text" class="form-control" id="nomadmin" name="nomadmin" placeholder="Enter name complet" style="margin-bottom: 32px;" data-parsley-length="[4, 20]" data-parsley-trigger="change" required>
                </div>
                
                <div class="mb-3  fw-bold">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input type="email" data-parsley-type="email" class="form-control" id="emailadmin" name="emailadmin" placeholder="Enter Email" required data-parsley-trigger="change">
                 </div>
				 <div class="mb-3  fw-bold">
                    <label for="exampleFormControlInput1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="passwordadmin" name="passwordadmin" placeholder="Enter passwordadmin" required data-parsley-trigger="change">
                 </div>
				 <input type="button"  class="btn btn-outline-warning btn-lg  "name="Addadmin" value="ADD Admin">
				 <button type="button" class="btn btn-secondary btn-lg" data-bs-dismiss="modal">Close</button>

			</form>
            </div>
    </div>
  </div>
</div>
</body>
</html>