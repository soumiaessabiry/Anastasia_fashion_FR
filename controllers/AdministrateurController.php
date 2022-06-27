
<?php
class AdministrateurController  {
// **************************************Admin*******************************/
		public function getAlladmin(){
			$admines=new Administrateur();
			return $admines->afficheAdmin();  
		}
		
		public function updateadmin(){
			if(isset($_POST['updateAdmin'])){
				$admine = new Administrateur();
				$nom_admin=$_POST['updnamAdmie'];
				$prenom_admin=$_POST['updprenAdmin']; 
				$role_admin=$_POST['roleupd']; 
				$updatAdmin=$_POST["idadmine"];
				$emailAdmn=$_POST["updemailadme"];
				$passwordadmn=$_POST["UpdpasswordAdmine"];
				if($admine->updatAdmin($nom_admin,$prenom_admin,$role_admin,$updatAdmin,$emailAdmn,$passwordadmn))
				{
					echo "<script type='text/javascript'>";
					echo "alert(' Admin et  bien modifier');";
					echo "window.location.href='Admin';";
					echo "</script>";
				}			
			}
				
			
		}
// ************************************designer********************************/
				public function adddesigner(){

					if (isset($_POST['Adddesigner'])){ 
						$designer=new Designer();
						$Nom_Designer=$_POST['nomdesfas'];
						$Prenom_Designer=$_POST['prenomdesfas'];
						$Role=$_POST['role'];
						$Email_Designer=$_POST['emaildesfas'];
						$password_Designer=$_POST['passworddesfas'];
						$passworddesignerhach=password_hash($password_Designer,PASSWORD_DEFAULT);
						if($designer->creatdesigner($Nom_Designer, $Prenom_Designer, $Role ,$Email_Designer,$passworddesignerhach)){
							// header('location:fashiondesigner');
							echo "<script type='text/javascript'>";
							echo "alert(' Designer bien ajouter');";
							echo "window.location.href='fashiondesigner';";
							echo "</script>";
						}
					}
				}
				
				public function getAlldesigner(){
					$designer=new Designer();
					return $designer->affichedesigner();  
			
				}
				
				public function updatedesigner(){

					if(isset($_POST['updatfach'])){
						$designer=new Designer();
						$id_designerupd=$_POST['iddesignere'];
						$Nom_Designerupd=$_POST['nomdesfasupd'];
						$Prenom_Designerup=$_POST['prenomdesfasupd'];		
						$Role_desig=$_POST['roleupd'];		
						$Email_Designerupd=$_POST['emaildesfasupd'];
						$password_Designerupd=$_POST['passworddesfasupd'];
					     $passworddesignerhachupd=password_hash($password_Designerupd,PASSWORD_DEFAULT);
						if($designer->updatdesigner($Nom_Designerupd,$Prenom_Designerup,$Role_desig,$Email_Designerupd,$passworddesignerhachupd,$id_designerupd)) 
						{
							echo "<script type='text/javascript'>";
							echo "alert('<div> Designer bien modifier');";
							echo "window.location.href='fashiondesigner';";
							echo "</script>";
						}
						}
				}
			
				public function deletedesigner(){

					if(isset($_POST['deletdesigner'])){
						$Designer= new Designer(); 
						if($Designer->deletdesigner($_POST['iddesignere'])) header('location:fashiondesigner');
						} 
					}

// ********************************Client*************************************************** 	
		public function addClient(){

			if (isset($_POST['signupclient'])){ 
				$client=new Client();
				$nomclient=$_POST['nomclient'];
				$prenomclient=$_POST['prenomclient'];
				$Role_client=$_POST['role_cliente'];
				$emailclient=$_POST['emailclient'];
				$pwdclient=$_POST['passwordclient'];
				$confpwdclient=$_POST['confpasswordclient'];
				if ($pwdclient ===$confpwdclient) {
					$passworddesignerhach=password_hash($pwdclient,PASSWORD_DEFAULT);
					if($client->creatclinet($nomclient,$prenomclient,$Role_client,$emailclient,$passworddesignerhach,$passworddesignerhach)) {
						echo "<script type='text/javascript'>";
							echo "alert(' Client et  bien ajouter');";
							echo "window.location.href='login';";
							echo "</script>";
						}
					}else{
				            echo "<script type='text/javascript'>";
							echo "alert(' Probleme de inscription !!!');";
							echo "window.location.href='signup';";
							echo "</script>";
							
				}
			}
			
		}

		public function getAllClient(){
			$client=new Client();
			return $client->afficheclient();  

        }
//***********************************login****************************************** */
		public function loginUsers(){
			if (isset($_POST['loginuser'])){ 
				$logine = new login();
				$emaillogin = $_POST['emailuser'];
				$passwordlogin = $_POST['passworduser'];
				$res = $logine->login($emaillogin);
				if(password_verify($_POST['passworduser'],$res['password_user'])){
				$_SESSION['log']==true;
				$_SESSION["id_users"] =$res['id_user'];
				$_SESSION["prenom_user"] = $res['prenom_user'];
				$_SESSION["nom_user"] = $res['nom_user'];
				$_SESSION["email_user"] = $res['email_user'];
				$_SESSION["role"] = $res['role_user'];
				if($res['role_user'] == 'Admin') {
						header('location:Dashboardadmin');
				}elseif($res['role_user'] =='Designer') {
						header('location:dashborddesigner');
				}else{
					header('location:home');
				}	
				}

			
			}
		}
//*******************************************product***************************************************** */
		public function addProduit(){
			if (isset($_POST['addoroduct'])){ 
				$products = new Product();
				// $id_designer=$_SESSION["nom_user"];
								
				$nom_product = $_POST['prodajouter'];
				$description_product = $_POST['discrip'];
				$Taille_produit= $_POST['taille_produ'];
				$prix_product = $_POST['prixproduit'];
				$img_product = $_FILES['imgproduit']['name'];
				
				$fille_tmp=$_FILES['imgproduit']['tmp_name'];
				move_uploaded_file($fille_tmp,"../Anastasia_fashion_FR/public/image/".$img_product);
				$qutiter_product = $_POST['quantproduit'];

				if($products->ajouterproduit($nom_product,$description_product,$Taille_produit,$prix_product,$img_product,$qutiter_product,$_SESSION["id_users"]))
				{
				            echo "<script type='text/javascript'>";
							echo "alert(' Produit  et  bien ajouter');";
							echo "window.location.href='produiddesigner';";
							echo "</script>";
				}

			}
		}

		public function getAllproduit(){
			$products=new Product();
			return $products->afficheProduct();  

		}
		public function getaproduct(){
			$products=new Product();
			return $products->afficheUSER($_SESSION["id_users"]);  

		}

		public function updatedeproduit(){
			if(isset($_POST['updateproduct'])){
				$products= new Product(); 
				$id_product = $_POST['updproduite'];
				$nom_productupd = $_POST['nomproduitupde'];
				$description_productupd = $_POST['discrupdprod'];
				$Taille_produitupd = $_POST['taille_produp'];
				$img_productupd = $_POST['imgprodupd'];
				$prix_productupd = $_POST['prixprodupd'];
				$qutiter_productupd = $_POST['quantprodupd'];
				if($products->updateproduct($id_product,$nom_productupd,$img_productupd,$description_productupd ,$Taille_produitupd,$prix_productupd,$qutiter_productupd)) {
					echo "<script type='text/javascript'>";
							echo "alert(' Produit  et  bien Modifer');";
							echo "window.location.href='produiddesigner';";
							echo "</script>";
							
						
				};
				}
		}

			public function deletProduit(){
			if(isset($_POST['deletProduit'])){
				$products= new Product(); 
				if($products->deletproduit($_POST['updproduite'])) header('location:produiddesigner');
				} 
			}


			public function creatPanier(){
				if(isset($_POST['achter'])){
					$commands= new Command();
					$_SESSION['id_produit']=$_POST['id_produit'];
						@$product = $commands->creatCommand($_SESSION['id_produit'],$_SESSION['prix_produit'],$_SESSION['Taille'],);
					return $product;	
				}
			}

			public function addcommand(){
				$commands = new Command();
				if (isset($_POST['Achter']) && !empty($_POST['Achter'])){ 
				if($_POST['qnt'] < $_POST['qutiterproduit']){
					echo "<script type='text/javascript'>";
					echo "alert('Votre commande a été annulée car vous commandez plus que la quantité disponible ');";
					echo "window.location.href='home';";
					echo "</script>";
				

				}else{
				  $nom_produit=$_POST['nom_produit'];
					$prix=$_POST['prix_produit'];
					$quatiter=$_POST['qutiterproduit'];
					$Taille_produit=$_POST['taille'];
					$date=date("Y-m-d H:i:s", strtotime('-2 hours'));
					if($commands->addcommand($_SESSION['id_produit'],$nom_produit,$prix,$Taille_produit,$quatiter,$date,$_SESSION["email_user"]))
					{
						echo "<script type='text/javascript'>";
						echo "alert(' Votre commande et  bien ajouter');";
						echo "window.location.href='moncommand';";
						echo "</script>";
						
					}
					}
								
				}
				
				
				
				

			
				
			}
			public function getCommandbyclient(){

				$commandclient=new Command();
				return $commandclient->affichecommand($_SESSION["email_user"]);  
			
			}
			public function getAllCommand(){

				$commandclient=new Command();
				return $commandclient->afficheAllCommand();  
			
			}
			public function getCommandbydesigner(){

				$commandclient=new Command();
				return $commandclient->affichecommand($_SESSION["id_users"],$_SESSION['']);  
			
			}
			public function getCommandfordesigner(){

				$commandclient=new Command();
				return $commandclient->affichecommandfordesigner($_SESSION["id_users"]);  
			
			}
			public function delecommand(){

				if(isset($_POST['deletcommand'])){
					$commandclient=new Command();
					if($commandclient->delecommande($_POST['deletcommand'])) header('location:moncommand');
					} 

			}
			
			public function getAllUser(){

				$users=new Client();
				return $users->afficheUserConnect($_SESSION["id_users"]);  

			}

}
?>