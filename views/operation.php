<?php


$Controller = new AdministrateurController();
    // admin
   $Controller->updateadmin();
// designer

   $Controller->adddesigner();
   $Controller->updatedesigner();
   $Controller->deletedesigner();
// client
   $Controller->addClient();
  
   $Controller->loginUsers()
 ?>