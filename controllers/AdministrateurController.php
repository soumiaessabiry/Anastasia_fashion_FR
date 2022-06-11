
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

}
?>
