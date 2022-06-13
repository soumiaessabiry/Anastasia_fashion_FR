<?php
require_once('../Anastasia_fashion_FR/database/connexiondb.php');

	class Designer extends Connextiondb
	{
		public function creatdesigner($Nom_Designer, $Prenom_Designer, $Cin_Designer ,$imge_Designer,$Email_Designer,$password_Designer){

			$querinsertdesigner=$this->connect()->exec("INSERT INTO designer_fashion (`profil_designer`, `id_designer`, `nom_designer`, `prenom_designer`, `cin_designer`, `email_designer`, `password_designer`) VALUE ('$imge_Designer', NULL,'$Nom_Designer', '$Prenom_Designer' ,'$Cin_Designer','$Email_Designer','$password_Designer')");
			if ($querinsertdesigner) {
				return true;
			}else{
			return false;
		    }

		}

		public function affichedesigner(){

			$queraffichdesigner="SELECT * FROM  designer_fashion ";
			return $prepare=$this->connect()->query($queraffichdesigner)->fetchALL();

		}
		
		public function updatdesigner($imge_Designerupd,$Nom_Designerupd,$Prenom_Designerup,$Cin_Designerupd,$Email_Designerupd,$password_Designerupd,$id_designerupd){

			$requpdateAdmin=" UPDATE `designer_fashion` SET`profil_designer`='$imge_Designerupd',`nom_designer`='$Nom_Designerupd',`prenom_designer`='$Prenom_Designerup',`cin_designer`='$Cin_Designerupd',`email_designer`='$Email_Designerupd',`password_designer`='$password_Designerupd' WHERE `id_designer`='$id_designerupd'";
			$resupdate=$this->connect()->exec($requpdateAdmin);
			if ($requpdateAdmin) {
				return true;
			}else{
				return false;
			}
		}

		public function deletdesigner($iddeletdesigner){
			$reqdeletdesigner=$this->connect()->exec("DELETE FROM `designer_fashion` WHERE `id_designer`='$iddeletdesigner' ");
			return     $reqdeletdesigner;
		}
	} 
	

   



?>