<?php
require_once('../Anastasia_fashion_FR/database/connexiondb.php');
class Administrateur extends Connextiondb
	{
		// public function creatAdmine($nom_admin,$prenom_admin,$Role, $emailadm, $passwordadmin){

		// 	$querinsertadm=$this->connect()->exec("INSERT INTO `admines`(`idadmin`, `nom_admine`, `prenom_admin`, `role_adm`, `email_admin`, `password_admin`) VALUES (NULL,'$nom_admin','$prenom_admin','$Role','$emailadm','$passwordadmin')");
		// 	if ($querinsertadm) {
		// 		return true;
		// 	}else{
		// 	return false;
		//     }

		// }

		public function afficheAdmin(){

			$queraffadmin="SELECT * FROM  users  where `role_user`='Admin'";
			return $prepare=$this->connect()->query($queraffadmin)->fetchALL();

		}

		public function updatAdmin($nom_admin,$prenom_admin,$role_admin,$updatAdmin,$emailAdmn,$passwordadmn){

			$requpdateAdmin=" UPDATE `users` SET `nom_user`='$nom_admin',`prenom_user`='$prenom_admin',`role_user`='$role_admin',`email_user`='$emailAdmn',`password_user`='$passwordadmn' WHERE `id_user`='$updatAdmin'";
			$resupdate=$this->connect()->exec($requpdateAdmin);
			if ($requpdateAdmin) {
				return true;
			}else{
				return false;
			}
		}

		public function deletadmin($iddeletadm){
			$reqdeletAdmin=$this->connect()->exec("DELETE FROM `admines` WHERE `idadmin`='$iddeletadm' ");
			return     $reqdeletAdmin;
		}
	} 
	

   



?>