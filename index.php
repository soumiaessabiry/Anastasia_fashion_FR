
<?php

if(basename($_SERVER['REQUEST_URI'])=="home" || basename($_SERVER['REQUEST_URI'])=="allproduct" || basename($_SERVER['REQUEST_URI'])=="showproduct"||basename($_SERVER['REQUEST_URI'])=="Administrateur"||basename($_SERVER['REQUEST_URI'])=="etudiants"||basename($_SERVER['REQUEST_URI'])=="signup"||basename($_SERVER['REQUEST_URI'])=="panier" ||basename($_SERVER['REQUEST_URI'])=="login"){
  include('views/includes/sidebar.php') ;
  include('views/includes/script.php') ;
//   include('./public/image/index.php') ;

 


}
if(basename($_SERVER['REQUEST_URI'])=="updatepoduit" || basename($_SERVER['REQUEST_URI'])=="produiddesigner" || basename($_SERVER['REQUEST_URI'])=="dashborddesigner"||basename($_SERVER['REQUEST_URI'])=="clientdesigner"||basename($_SERVER['REQUEST_URI'])=="profilfashiondes"||basename($_SERVER['REQUEST_URI'])=="commanddesigner"){
  include('views/includes/sidebardesigner.php') ;
  include('views/includes/script.php') ;

}
if(basename($_SERVER['REQUEST_URI'])=="updatefashiondes" || basename($_SERVER['REQUEST_URI'])=="Updatadmin" ||
basename($_SERVER['REQUEST_URI'])=="profilAdmin"||basename($_SERVER['REQUEST_URI'])=="Dashboardadmin"||
basename($_SERVER['REQUEST_URI'])=="clientanastasia"||basename($_SERVER['REQUEST_URI'])=="productanastasia"||basename($_SERVER['REQUEST_URI'])=="commandanastasia"||basename($_SERVER['REQUEST_URI'])=="Admin"||basename($_SERVER['REQUEST_URI'])=="fashiondesigner"){
  include('views/includes/sidbaradm.php') ;
//   include('views/includes/script.php') ;

}

require_once('./autoload.php');
require_once('./controllers/HomeController.php');

$home =new HomeController();
$pages=
  [
      'updatepoduit','updatefashiondes','Updatadmin','showproduct',
      'profilAdmin','profilfashiondes','produiddesigner','productanastasia',
      'login','fashiondesigner','dashborddesigner','Dashboardadmin','commanddesigner',
      'clientdesigner','clientanastasia','allproduct','Admin','sidebar','sidebardesigner',
      'home','commandanastasia','sidbaradm','panier','logout','404','signup'
  ];
if(isset($_GET['page'])){
  if(in_array($_GET['page'],$pages)){
      $home->index($_GET['page']);
  } else{
    include('views/includes/404.php');
  }
}else{
      $home->index('home');
  }












































