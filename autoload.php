<?php
require_once('./app/require.php');
spl_autoload_register('autoload');

function autoload($class){
    $array_paths =array(
        'database/',
        'app/classes/',
        'controllers/',
        'models/',
        );
    $part=explode('\\',$class);
    $name=array_pop($part);
    foreach($array_paths as $path){
        $file=sprintf($path.'%s.php',$name);
        if(is_file($file)){
            require_once $file;

        }
        if(file_exists('views/' . $class . '.php'))
		{
			require_once('models/' . $class . '.php');
		}

    }
}




