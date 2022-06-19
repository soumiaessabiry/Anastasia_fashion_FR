
<?php
session_start();

if(basename($_SERVER['REQUEST_URI'])==="home" || basename($_SERVER['REQUEST_URI'])==="allproduct" || basename($_SERVER['REQUEST_URI'])==="showproduct"||basename($_SERVER['REQUEST_URI'])==="Administrateur"||basename($_SERVER['REQUEST_URI'])==="etudiants"||basename($_SERVER['REQUEST_URI'])==="signup"||basename($_SERVER['REQUEST_URI'])==="panier" ||basename($_SERVER['REQUEST_URI'])==="login"){
  require_once('views/includes/sidebar.php') ;
  require_once('views/includes/script.php') ;
  require_once('../Anastasia_fashion_FR/public/image/index.php');


}
if(basename($_SERVER['REQUEST_URI'])==="operation" || basename($_SERVER['REQUEST_URI'])==="Dashboardadmin" ||basename($_SERVER['REQUEST_URI'])==="fashiondesigner" ||basename($_SERVER['REQUEST_URI']) ==="signup" ||basename($_SERVER['REQUEST_URI'])==="clientanastasia"||basename($_SERVER['REQUEST_URI'])==="produiddesigner" ||basename($_SERVER['REQUEST_URI'])==="allproduct"||basename($_SERVER['REQUEST_URI'])==="home"||basename($_SERVER['REQUEST_URI'])==="profilClient"
||basename($_SERVER['REQUEST_URI'])==="showproduct"||basename($_SERVER['REQUEST_URI'])==="moncommand"||basename($_SERVER['REQUEST_URI'])==="profilAdmin"
||basename($_SERVER['REQUEST_URI'])==="profilfashiondes"||basename($_SERVER['REQUEST_URI'])==="sidbaradm"||basename($_SERVER['REQUEST_URI'])==="sidebardesigner"||basename($_SERVER['REQUEST_URI'])==="sidebarclient"||basename($_SERVER['REQUEST_URI'])==="productanastasia"){
require_once('../Anastasia_fashion_FR/models/modeladmin.php');
require_once('../Anastasia_fashion_FR/models/modeldesigner.php');
require_once('../Anastasia_fashion_FR/models/modelclient.php');
require_once('../Anastasia_fashion_FR/models/modelproduct.php');
require_once('../Anastasia_fashion_FR/controllers/AdministrateurController.php');

}

if(basename($_SERVER['REQUEST_URI'])==="updatepoduit"|| basename($_SERVER['REQUEST_URI'])==="produiddesigner" || basename($_SERVER['REQUEST_URI'])==="dashborddesigner"||basename($_SERVER['REQUEST_URI'])==="clientdesigner"||basename($_SERVER['REQUEST_URI'])==="profilfashiondes"||basename($_SERVER['REQUEST_URI'])==="commanddesigner"){
  require_once('views/includes/sidebardesigner.php') ;
  require_once('views/includes/script.php') ;

}
if(basename($_SERVER['REQUEST_URI'])==="moncommand"){
  require_once('views/includes/sidebarclient.php') ;
  require_once('views/includes/script.php') ;

}
if(basename($_SERVER['REQUEST_URI'])==="profilClient"){
  require_once('views/includes/sidebarclient.php') ;
  require_once('views/includes/script.php') ;

}
// if(basename($_SERVER['REQUEST_URI'])==="profilAdmin"){
//   require_once('views/includes/sidbaradm.php') ;
//   require_once('views/includes/script.php') ;

// }
if(basename($_SERVER['REQUEST_URI'])==="profilfashiondes"){
  require_once('views/includes/sidebardesigner.php') ;
  require_once('views/includes/script.php') ;

}
if(basename($_SERVER['REQUEST_URI'])==="updatefashiondes" || basename($_SERVER['REQUEST_URI'])==="Updatadmin" ||basename($_SERVER['REQUEST_URI'])==="profilAdmin"||basename($_SERVER['REQUEST_URI'])==="Dashboardadmin"||basename($_SERVER['REQUEST_URI'])==="clientanastasia"||basename($_SERVER['REQUEST_URI'])==="productanastasia"||basename($_SERVER['REQUEST_URI'])==="commandanastasia"||basename($_SERVER['REQUEST_URI'])==="Admin"||basename($_SERVER['REQUEST_URI'])==="fashiondesigner"){
  require_once('views/includes/sidbaradm.php') ;
  require_once('views/includes/script.php') ;
  require_once('models/modeladmin.php');


}
require_once('./autoload.php');
require_once('./controllers/HomeController.php');
$home =new HomeController();
$pages=
  [
      'updatepoduit','showproduct',
      'profilAdmin','profilfashiondes','produiddesigner','productanastasia',
      'login','fashiondesigner','dashborddesigner','Dashboardadmin','commanddesigner',
      'clientdesigner','clientanastasia','allproduct','Admin','sidebar','sidebardesigner',
      'home','commandanastasia','sidbaradm','panier','logout','404','signup','operation','modeladmin','modeldesigner','modelclient','modelproduct','Panier','moncommand','profilClient','sidebarclient'
  ];
if(isset($_GET['page'])){
  if(in_array($_GET['page'],$pages)){
      $home->index($_GET['page']);
      
  } else{
    include('views/includes/404.php');
  }
}else{
      $home->index('home');
      include('views/includes/sidebar.php') ;
      include('views/includes/script.php') ;

  }












































