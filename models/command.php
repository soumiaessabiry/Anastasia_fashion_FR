<?php
require_once('../Anastasia_fashion_FR/database/connexiondb.php');
class Command extends Connextiondb
	{
        public function creatCommand($produit_selct){
			$createPanier="SELECT * FROM `produit` WHERE `id_produit`= $produit_selct";
			return $prepare=$this->connect()->query($createPanier)->fetchAll();
			
			
		}
		public function addcommand($id_produit,$nom_produit,$prix,$Taille_produit,$quatiter,$date,$gmail_client){
			$querinsertdproduct = $this->connect()->exec("INSERT INTO `command` (`id_command`,`id_produit`,`nom_prod_commder`,`prix_prod_commder`,`taille`,`quantiter`,`date_commande`,`gmail_client`) 
			VALUES (NULL,'$id_produit','$nom_produit','$prix','$Taille_produit','$quatiter','$date','$gmail_client')");
			if ($querinsertdproduct) {
				return true;
			}else{
				return false;
		    }

		}
        public function affichecommand($gmail_client){

			$queraffichcommand="SELECT * FROM `command` WHERE `gmail_client`='$gmail_client'";
			return $prepare=$this->connect()->query($queraffichcommand)->fetchALL();

		}
        // public function affichecommandbydesigner($id_designer){

		// 	$queraffichcommand="SELECT * FROM `command` WHERE `id_produit`='$id_designer'";
		// 	return $prepare=$this->connect()->query($queraffichcommand)->fetchALL();

		// }
        public function afficheAllCommand(){

			$queraffichcommand="SELECT * FROM `command` ";
			return $prepare=$this->connect()->query($queraffichcommand)->fetchALL();

		}
		public function delecommande($iddeletcommand){
			$reqdeletproduct=$this->connect()->exec("DELETE FROM `command` WHERE `id_command`='$iddeletcommand' ");
			return     $reqdeletproduct;
		}
	} 
	

   



?>