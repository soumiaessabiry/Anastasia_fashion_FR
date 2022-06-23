<?php


$Controller = new AdministrateurController();
    // admin
   $Controller->updateadmin() ;
// designer
   $Controller->adddesigner();
   $Controller->updatedesigner();
   $Controller->deletedesigner();
// client
   $Controller->addClient();
//   login
   $Controller->loginUsers();

   // product
   $Controller->addProduit();
   $Controller->updatedeproduit();
   $Controller->deletProduit();
//   command
   $Controller->addcommand();
   $Controller->delecommand();
   // users
   $Controller->getAllUser();
   

 ?>