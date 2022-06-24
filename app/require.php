<?php 
require_once('database/connexiondb.php');

  if(basename($_SERVER['REQUEST_URI'])==="operation" || basename($_SERVER['REQUEST_URI'])==="Dashboardadmin" ||basename($_SERVER['REQUEST_URI'])==="fashiondesigner" ||basename($_SERVER['REQUEST_URI']) ==="signup" ||basename($_SERVER['REQUEST_URI'])==="clientanastasia"||basename($_SERVER['REQUEST_URI'])==="produiddesigner" ||basename($_SERVER['REQUEST_URI'])==="allproduct"||basename($_SERVER['REQUEST_URI'])==="home"||basename($_SERVER['REQUEST_URI'])==="profilClient"
  ||basename($_SERVER['REQUEST_URI'])==="showproduct"||basename($_SERVER['REQUEST_URI'])==="moncommand"||basename($_SERVER['REQUEST_URI'])==="profilAdmin"
  ||basename($_SERVER['REQUEST_URI'])==="profilfashiondes" || basename($_SERVER['REQUEST_URI'])==="home"||basename($_SERVER['REQUEST_URI'])==="sidbaradm"||basename($_SERVER['REQUEST_URI'])==="sidebardesigner"||basename($_SERVER['REQUEST_URI'])==="sidebarclient"||basename($_SERVER['REQUEST_URI'])==="productanastasia"
  ||basename($_SERVER['REQUEST_URI'])==="dashborddesigner"){
  require_once('../Anastasia_fashion_FR/models/modeladmin.php');
  require_once('../Anastasia_fashion_FR/models/modeldesigner.php');
  require_once('../Anastasia_fashion_FR/models/modelclient.php');
  require_once('../Anastasia_fashion_FR/models/modelproduct.php');
  require_once('../Anastasia_fashion_FR/controllers/AdministrateurController.php');
  
  }
  
  
 

?>