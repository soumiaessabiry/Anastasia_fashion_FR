<?php
require_once('../Anastasia_fashion_FR/database/connexiondb.php');
class Client extends Connextiondb
	{
		public function creatclinet($imgprofilclient,$nomclient,$prenomclient,$emailclient,$pwdclient){

			$querinsertclient=$this->connect()->exec("INSERT INTO `client`(`id_client`,`profil_client`,`prenom_client`,`nom_client`,`email_client`,`password_client`) VALUES (NULL,'$imgprofilclient','$prenomclient','$nomclient','$emailclient','$pwdclient')");
			if ($querinsertclient) {
				return true;
			}else{
			return false;
		    }

		}

		public function afficheclient(){

			$queraffclient="SELECT * FROM  `client` ";
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

		// public function deletadmin($iddeletadm){
		// 	$reqdeletAdmin=$this->connect()->exec("DELETE FROM `admines` WHERE `idadmin`='$iddeletadm' ");
		// 	return     $reqdeletAdmin;
		// }
	} 
	

   



?>