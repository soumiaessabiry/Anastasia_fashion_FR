<?php 
class Connexiondb{
    static public function connexion(){

       $conn=new PDO("mysql:host=localhost;dbname=anastasia fashion" ,"root","");
       $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
       return $conn;
      
       
    }
}



?>