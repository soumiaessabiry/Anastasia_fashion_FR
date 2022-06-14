
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
		}elseif($res['role_user'] == 'dashborddesigner') {
				header('location:Dashboardadmin');
		}else{
			header('location:DashboardClien');

		}
	}
}



}
?>