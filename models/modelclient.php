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
		public function afficheUserConnect($idusersconnect){

			$querafAllusers="SELECT * FROM  users  where `id_user`='$idusersconnect'";
			return $prepare=$this->connect()->query($querafAllusers)->fetchALL();

		}


		public function afficheclient(){

			$queraffclient="SELECT * FROM  `users` where `role_user`='Client'";
			return $prepare=$this->connect()->query($queraffclient)->fetchALL();

		}

	

		// public function deletadmin($iddeletadm){
		// 	$reqdeletAdmin=$this->connect()->exec("DELETE FROM `admines` WHERE `idadmin`='$iddeletadm' ");
		// 	return     $reqdeletAdmin;
		// }
	} 
	

   



?>