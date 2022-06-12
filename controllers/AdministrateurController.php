
<?php
class AdministrateurController  {

	public function addadmin(){

		if (isset($_POST['Addadmin'])){ 
			$admines=new Administrateur();
			$Nom_completadm=$_POST['nomadmin'];
			$emailadm=$_POST['emailadmin'];
			$passwordadmin=$_POST['passwordadmin'];
			if($admines->creatAdmine($Nom_completadm, $emailadm, $passwordadmin)) header('location:Admin');

		}
	}
	
	public function getAlladmin(){

		$admines=new Administrateur();
		return $admines->afficheAdmin();  

	}
	
	public function updateadmin(){
		if(isset($_POST['updateAdmin'])){

			$admine = new Administrateur(); 
			$updatAdmin=$_POST["idadmine"];
			$NomCompAdmin=$_POST["updnamAdmie"];
			$emailAdmn=$_POST["updemailadme"];
			$passwordadmn=$_POST["UpdpasswordAdmine"];
			
			if($admine->updatAdmin($NomCompAdmin,$emailAdmn,$passwordadmn,$updatAdmin))header('location:Admin');
			}
	}

	public function deleteadmin(){
		if(isset($_POST['deletid'])){
			$admine = new Administrateur(); 
			if($admine->deletadmin($_POST['idadmine'])) header('location:Admin');
			} 
		}
// *******************************************************designer********************************/
				public function adddesigner(){

					if (isset($_POST['Adddesigner'])){ 
						$designer=new Designer();
						$Nom_Designer=$_POST['nomdesfas'];
						$Prenom_Designer=$_POST['prenomdesfas'];
						$Cin_Designer=$_POST['cindesfas'];
						$imge_Designer=$_POST['profdesfas'];
						$Email_Designer=$_POST['emaildesfas'];
						$password_Designer=$_POST['passworddesfas'];
					
						if($designer->creatdesigner($Nom_Designer, $Prenom_Designer, $Cin_Designer ,$imge_Designer,$Email_Designer,$password_Designer)) header('location:fashiondesigner');
			
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
						$Cin_Designerupd=$_POST['cindesfasupd'];
						$imge_Designerupd=$_POST['profdesfasupd'];
						$Email_Designerupd=$_POST['emaildesfasupd'];
						$password_Designerupd=$_POST['passworddesfasupd'];
						if($designer->updatdesigner($imge_Designerupd,$Nom_Designerupd,$Prenom_Designerup,$Cin_Designerupd,$Email_Designerupd,$password_Designerupd,$id_designerupd)) header('location:fashiondesigner');
						}
				}
			
				public function deletedesigner(){
					if(isset($_POST['deletdesigner'])){
						$Designer= new Designer(); 
						if($Designer->deletdesigner($_POST['iddesignere'])) header('location:fashiondesigner');
						} 
					}
}
?>

