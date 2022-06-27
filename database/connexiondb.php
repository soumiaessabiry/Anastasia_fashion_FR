<?php
class Connextiondb
{
   
    public  function connect()
    {
      $conn = new PDO("mysql:host=localhost;dbname=anastasia fashion" ,"root" ,"");
        return $conn;
    }
  //   public function GetData($req)
  // {
  //   try
  //   {
  //   return $this->connect()->prepare($req);
  //   }catch (PDOException $ex) {echo $ex->getMessage();}
  // }


}