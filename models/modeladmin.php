<?php
require_once('../Anastasia_fashion_FR/database/connexiondb.php');
class Administrateur extends Connextiondb
	{
		public function creatAdmine($Nom_completadm, $emailadm, $passwordadmin){

			$querinsertadm=$this->connect()->exec("INSERT INTO admines (`idadmin` ,`nom_complet_admin`, `email_admin`, `password_admin`) VALUES (NULL,'$Nom_completadm','$emailadm','$passwordadmin')");
			if ($querinsertadm) {
				return true;
			}else{
			return false;
		    }

		}

		public function afficheAdmin(){

			$queraffadmin="SELECT * FROM  admines ";
			return $prepare=$this->connect()->query($queraffadmin)->fetchALL();

		}

		public function updatAdmin($NomCompAdmin,$emailAdmn,$passwordadmn,$updatAdmin){

			$requpdateAdmin=" UPDATE `admines` SET `nom_complet_admin`='$NomCompAdmin',`email_admin`='$emailAdmn',`password_admin`='$passwordadmn' WHERE `idadmin`='$updatAdmin'";
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