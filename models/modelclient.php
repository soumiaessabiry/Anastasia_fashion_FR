<?php
require_once('../Anastasia_fashion_FR/database/connexiondb.php');
class Client extends Connextiondb
	{
		public function creatclinet($nomclient,$prenomclient,$Role_client,$emailclient,$pwdclient){

			$querinsertclient=$this->connect()->exec("INSERT INTO `users` (`id_user`, `nom_user`, `prenom_user`, `role_user`, `email_user`, `password_user`) 
			VALUES (NULL,'$prenomclient','$nomclient','$Role_client','$emailclient','$pwdclient')");
			if ($querinsertclient) {
				return true;
			}else{
			return false;
		    }

		}
		// 	$querinsertadm=$this->connect()->exec("INSERT INTO `admines`(`idadmin`, `nom_admine`, `prenom_admin`, `role_adm`, `email_admin`, `password_admin`) VALUES (NULL,'$nom_admin','$prenom_admin','$Role','$emailadm','$passwordadmin')");



		public function afficheclient(){

			$queraffclient="SELECT * FROM  `users` where `role_user`='Client'";
			return $prepare=$this->connect()->query($queraffclient)->fetchALL();

		}

		// public function updatAdmi($NomCompAdmin,$emailAdmn,$passwordadmn,$updatAdmin){

		// 	$requpdateAdmin=" UPDATE `admines` SET `nom_complet_admin`='$NomCompAdmin',`email_admin`='$emailAdmn',`password_admin`='$passwordadmn' WHERE `idadmin`='$updatAdmin'";
		// 	$resupdate=$this->connect()->exec($requpdateAdmin);
		// 	if ($requpdateAdmin) {
		// 		return true;
		// 	}else{
		// 		return false;
		// 	}
		// }

		public function deletadmin($iddeletadm){
			$reqdeletAdmin=$this->connect()->exec("DELETE FROM `admines` WHERE `idadmin`='$iddeletadm' ");
			return     $reqdeletAdmin;
		}
	} 
	

   



?>