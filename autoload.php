<?php
session_start();
require_once("./bootsrap.php");
spl_autoload_register('autoload');
function autoload($name_dossier){
    $array_path=array(
    'database/',
    'app/classes/',
    'controllers/',
    'models/',
    );
    $chemins=explode('\\',$name_dossier);
    $nomclass=array_pop($chemins);

    foreach ($array_path as $path) {
        $file=sprintf($path.'%s.php',$nomclass);
        if (is_file($file)) {
            include_once  $file;
        }
    }
}



