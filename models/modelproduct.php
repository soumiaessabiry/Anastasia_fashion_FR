<?php
require_once('../Anastasia_fashion_FR/database/connexiondb.php');

	class Product extends Connextiondb
	{
		public function ajouterproduit($nom_product,$description_product,$Taille_produit,$prix_product,$img_product,$qutiter_product,$id_userpro){
			$querinsertdproduct = $this->connect()->exec("INSERT INTO `produit`(`id_produit`, `nom_produit`, `image_produit`, `discription_produit`,`Taille`,`prix_produit`,`quantiter_produit`,`id_user_product`) VALUES(NULL,'$nom_product','$img_product','$description_product','$Taille_produit','$prix_product','$qutiter_product',$id_userpro)");
			if ($querinsertdproduct) {
			
			  				return true;

			}else{
				return false;
		    }

		}

		public function afficheProduct(){

			$queraffichage="SELECT * FROM `produit` ORDER BY `produit`.`id_produit` DESC";
			
			return $prepare=$this->connect()->query($queraffichage)->fetchALL();

		}
		public function afficheUSER($iduserconect){

			$queraffichage="SELECT * FROM `produit` WHERE `id_user_product`=$iduserconect";
			return $prepare=$this->connect()->query($queraffichage)->fetchALL();

		}
		
		public function updateproduct($id_product,$nom_productupd,$img_productupd,$description_productupd,$Taille_produitupd,$prix_productupd,$qutiter_productupd){	
			
			$requpdateproduct=" UPDATE `produit` SET `nom_produit`='$nom_productupd',`image_produit`='$img_productupd',`discription_produit`='$description_productupd',`Taille`='$Taille_produitupd',`prix_produit`='$prix_productupd',`quantiter_produit`='$qutiter_productupd' WHERE `id_produit`='$id_product'";
			$resupdate=$this->connect()->exec($requpdateproduct);
			if ($requpdateproduct) {
				return true;
			}else{
				return false;
			}
		}

		public function deletproduit($iddeletproduct){
			$reqdeletproduct=$this->connect()->exec("DELETE FROM `produit` WHERE `id_produit`='$iddeletproduct' ");
			return     $reqdeletproduct;
			
			
		}
	
		
	} 
	

   



?>