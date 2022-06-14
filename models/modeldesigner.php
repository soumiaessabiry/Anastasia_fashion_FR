<?php
require_once('../Anastasia_fashion_FR/database/connexiondb.php');

	class Designer extends Connextiondb
	{
		public function creatdesigner($Nom_Designer,$Prenom_Designer,$Role,$Email_Designer,$password_Designer){
			$querinsertdesigner=$this->connect()->exec("INSERT INTO `users`(`id_user`,`nom_user`,`prenom_user`,`role_user`,`email_user`,`password_user`) VALUES (NULL,'$Nom_Designer','$Prenom_Designer','$Role','$Email_Designer','$password_Designer')");
			if ($querinsertdesigner) {
				return true;
			}else{
			return false;
		    }

		}

		public function affichedesigner(){

			$queraffichdesigner="SELECT * FROM  users  where `role_user`='Designer'";
			return $prepare=$this->connect()->query($queraffichdesigner)->fetchALL();

		}
		
		public function updatdesigner($Nom_Designerupd,$Prenom_Designerup,$Role_desig,$Email_Designerupd,$password_Designerupd,$id_designerupd){

			$requpdateAdmin=" UPDATE `users` SET `nom_user`='$Nom_Designerupd',`prenom_user`='$Prenom_Designerup',`role_user`='$Role_desig',`email_user`='$Email_Designerupd',`password_user`='$password_Designerupd' WHERE `id_user`='$id_designerupd'";
			$resupdate=$this->connect()->exec($requpdateAdmin);
			if ($requpdateAdmin) {
				return true;
			}else{
				return false;
			}
		}

		public function deletdesigner($iddeletdesigner){
			$reqdeletdesigner=$this->connect()->exec("DELETE FROM `users` WHERE `id_user`='$iddeletdesigner' ");
			return     $reqdeletdesigner;
		}
	} 
	

   



?>