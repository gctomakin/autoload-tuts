<?php

class Autoloader{

	public static function ModelLoader($class){

		$filename = strtolower($class) . '.php';
		$file ='model/' . $filename;
		if (!file_exists($file))
		{
		    return false;
		}
		include $file;
	}

	public static function ControllerLoader($class){

		$filename = strtolower($class) . '.php';
		$file ='controller/' . $filename;
		if (!file_exists($file))
		{
		    return false;
		}
		include $file;
	}

	public static function ViewLoader($class){

		$filename = strtolower($class) . '.php';
		$file ='view/' . $filename;
		if (!file_exists($file))
		{
		    return false;
		}
		include $file;
	}
}

spl_autoload_register(null, false);
spl_autoload_register('Autoloader::ModelLoader');
spl_autoload_register('Autoloader::ControllerLoader');
spl_autoload_register('Autoloader::ViewLoader');

try{

$controller = new Controller();
$model = new Model();
$view = new View();

}catch(Exception $e){
	throw new Exception($e->getMessage());
}

?>