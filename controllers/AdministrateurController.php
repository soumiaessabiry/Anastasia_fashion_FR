
<?php
class AdministrateurController  {

	// public function addadmin(){

	// 	if (isset($_POST['Addadmin'])){ 
	// 		$admines=new Administrateur();
	// 		$nom_admin=$_POST['nomadmin'];
	// 		$prenom_admin=$_POST['prenomadmin'];
	// 		$Role=$_POST['role_adm'];
	// 		$emailadm=$_POST['emailadmin'];
	// 		$passwordadmin=$_POST['passwordadmin'];
	// 		if($admines->creatAdmine($nom_admin,$prenom_admin,$Role,$emailadm,$passwordadmin)) header('location:Admin');

	// 	}
	// }
	
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
			if($admine->updatAdmin($nom_admin,$prenom_admin,$role_admin,$updatAdmin,$emailAdmn,$passwordadmn))header('location:Admin');
			}
	}

// *******************************************************designer********************************/
				public function adddesigner(){

					if (isset($_POST['Adddesigner'])){ 
						$designer=new Designer();
						$Nom_Designer=$_POST['nomdesfas'];
						$Prenom_Designer=$_POST['prenomdesfas'];
						$Role=$_POST['role'];
						$Email_Designer=$_POST['emaildesfas'];
						$password_Designer=$_POST['passworddesfas'];
					
						if($designer->creatdesigner($Nom_Designer, $Prenom_Designer, $Role ,$Email_Designer,$password_Designer)) header('location:fashiondesigner');
			
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
						if($designer->updatdesigner($Nom_Designerupd,$Prenom_Designerup,$Role_desig,$Email_Designerupd,$password_Designerupd,$id_designerupd)) header('location:fashiondesigner');
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
				if($client->creatclinet($nomclient,$prenomclient,$Role_client,$emailclient,$pwdclient,$confpwdclient)) header('location:login');
			}else echo 'eroooooor !!!!';

		}
		}

		public function getAllClient(){

		$client=new Client();
		return $client->afficheclient();  

}
//********************************************login****************************************** */
public function loginUsers(){

	if (isset($_POST['loginuser'])){ 
		$logine = new login();
		$emaillogin = $_POST['emailuser'];
		$passwordlogin = $_POST['passworduser'];
		$res = $logine->login($emaillogin,$passwordlogin);
		if($res['role_user'] == 'Admin') {
				header('location:Dashboardadmin');
		}elseif($res['role_user'] =='Designer') {
				header('location:dashborddesigner');
		}else{
			header('location:DashboardClient');
		}
		$_SESSION["id_users"] =$res['id_user'];
		$_SESSION["prenom_user"] = $res['prenom_user'];
		$_SESSION["nom_user"] = $res['nom_user'];
		$_SESSION["email_user"] = $res['email_user'];
	}
}
//*******************************************product***************************************************** */
public function addProduit(){
	if (isset($_POST['addoroduct'])){ 
		$products = new Product();
		// $id_designer=$_SESSION["nom_user"];
		$nom_product = $_POST['prodajouter'];
		$description_product = $_POST['discrip'];
		$prix_product = $_POST['prixproduit'];
		$img_product = $_POST['imgproduit'];
		$qutiter_product = $_POST['quantproduit'];

		if($products->ajouterproduit($nom_product,$description_product,$prix_product ,$img_product,$qutiter_product,$_SESSION["id_users"]))
		 header('location:produiddesigner');

	}
}

public function getAllproduit(){
	$products=new Product();
	return $products->afficheProduct($_SESSION["id_users"]);  

}

public function updatedeproduit(){
	if(isset($_POST['updateproduct'])){
		$products= new Product(); 
		$id_product = $_POST['updproduite'];
		$nom_productupd = $_POST['nomproduitupde'];
		$description_productupd = $_POST['discrupdprod'];
		$img_productupd = $_POST['imgprodupd'];
		$prix_productupd = $_POST['prixprodupd'];
		$qutiter_productupd = $_POST['quantprodupd'];
		if($products->updateproduct($id_product,$nom_productupd,$img_productupd,$description_productupd ,$prix_productupd,$qutiter_productupd,$_SESSION["id_users"])) header('location:produiddesigner');
		}
}

public function deletProduit(){
	if(isset($_POST['deletProduit'])){
		$products= new Product(); 
		if($products->deletproduit($_POST['updproduite'])) header('location:produiddesigner');
		} 
	}

}
?>