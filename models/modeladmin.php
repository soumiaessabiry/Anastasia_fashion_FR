<?php

// class Administrateur extends Connexiondb
// {
//    public function creatAdmine($nom, $prenom, $role, $password){

//        $reqinsert=$this->connect()->exec("INSERT INTO administrateurs (`Matricule`, `Nom`, `Prenom`, `Role`, `password`) VALUES (NULL,'$nom','$prenom','$role','$password')");

//        if ($reqinsert) {
//            return true;
//        }else{
//            return false;
//        }
//    }
   
//    public function afficheAdmin(){

//     if(isset($_POST['search']))
//     {
//        $search=$_POST['search'];
//        $query="SELECT * FROM administrateurs WHERE Matricule LIKE ? OR Nom LIKE ? OR Prenom LIKE ? OR 'Role' LIKE ? " ;
//        $query=$this->GetData($query);
//        $query->execute(['%'.$search.'%','%'.$search.'%','%'.$search.'%','%'.$search.'%']);
//        return $query->fetchAll();

//      }else{

//        $sql="SELECT * FROM  administrateurs ";
//        return $prepare=$this->connect()->query($sql)->fetchALL();

//      }

//    }

//    public function deletadmin($iddelet){

//        $ressdelet=$this->connect()->exec("DELETE FROM `administrateurs` WHERE Matricule='$iddelet' ");
//        return     $ressdelet;
//    }

//    public function updatAdmin($Nom,$Prenom,$Role,$password,$Updateid){

//        $requpdate=" UPDATE `administrateurs` SET `Nom`='$Nom',`Prenom`='$Prenom',`Role`='$Role',`password`='$password' WHERE `Matricule`='$Updateid'";

//        $resupdate=$this->connect()->exec($requpdate);

//        if ($requpdate) {

//            return true;
           
//        }else{
//          return false;

//            }

//        }
// }


?>