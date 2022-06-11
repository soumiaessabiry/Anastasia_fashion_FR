<?php 
include('database/connexiondb.php');
class ProductDesigner extends Connextiondb{
    static public function getAllProduct(){
        $reqqffprod=Connextiondb::connect()->prepare('SELECT * FROM `produit` where "id_produit"==$iddesigner');
    }


}