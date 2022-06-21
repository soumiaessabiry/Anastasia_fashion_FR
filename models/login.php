<?php
require_once('../Anastasia_fashion_FR/database/connexiondb.php');
class login extends Connextiondb
	{
	

        public function login($emailuser,$passworduser){
            $querlogin="SELECT * FROM  users WHERE email_user='$emailuser' AND password_user='$passworduser'";
            $result=$this->connect()->query($querlogin);
            $res= $result->fetch();
			return $res;
             

          
        }
        
	} 
	

   



?>