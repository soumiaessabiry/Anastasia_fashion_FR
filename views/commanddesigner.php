
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
    <title>client anasatasia</title>
    <link rel="stylesheet" href="././public/css/dachbord.css">
    <link href="././public/css/admin.css" rel="stylesheet" />

</head>
<body>

<div class="container-fluid mt-5">
        <div class="d-flex justify-content-center row" style="margin-top: 82px;">
            <div class="row">
                    <div class="col">
                    <button type="button" class="btn btn-outline btn-lg fw-bold mb-3 fd" style="background-color:#b72da4a4;  " data-bs-toggle="modal" data-bs-target="#exampleModal"> Mes command <img src="https://img.icons8.com/doodle/64/undefined/used-product.png" > </button>
                    </div>
                    </div>
                    <div class="mt-3">
                        <div class="table-responsive">
                    <table class="table table-striped table " id="myTable">
                        <thead>
                                        <tr style=" background-color: #b72da4a4;">
                                        <th>idproduct</th>
                                        <th>id_Command</th>
                                        <th>produit</th>
                                        <th>client commander</th>
                                        <th>prix</th>
                                        <th>quantiter</th>
                                        <th>date de commande</th>
                                        </tr>
                                        </thead>
                                        <tbody class="fw-bold">
                                            <tr class="bg-client">
                                            </tr>    
                                                    
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>	
    </div>
</body>
</html>
