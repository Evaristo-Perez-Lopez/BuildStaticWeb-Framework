<?php

define("DS", DIRECTORY_SEPARATOR); #Definir si es / o \

###     Directorio de la aplicacion y de los archivos de configuracion
define("ROOT", realpath(dirname(__FILE__)) . DS);
define("APP_PATH", ROOT . "config" . DS);

###     Incluye los archivos de configuracion establecidos
require_once(APP_PATH . "config.php");
require_once(APP_PATH . "email.php");
require_once(APP_PATH . "controller.php");

// echo "<pre>";print_r(get_required_files());


###     Recibe la peticion mediante get
if (isset($_GET['url'])) {
	$url = filter_input(INPUT_GET, 'url',FILTER_SANITIZE_URL);
	$url = explode("/", $url);
	$url = array_filter($url);
	$controller = array_shift($url);
    $action = array_shift($url);
} 



if (!isset($controller)) {
    $controller = "home";
}
if (!isset($action)) {
    $action = "index";
}



# C:\laragon\www\usaweb\controllers\nombreController.php        ---For example
$path = ROOT."controllers".DS.$controller."Controller.php";
$view = ROOT."views".DS.$controller.DS.$action.".phtml";

# C:\laragon\www\usaweb\views\template\default
$header = ROOT."views".DS."layouts".DS."default".DS."header.php";
$footer = ROOT."views".DS."layouts".DS."default".DS."footer.php";


    if(file_exists($path))
    {
        include_once($path);
        $ob = new $controller;
        $ob->$action();

        if (file_exists($view))
        {
            include_once($header);
            include_once($view);
            include_once($footer);
        }else { echo "la vista para la accion $action no existe"; }
    }else {
        echo "el controlador $controller no existe";
        // header("LOCATION: ".APP_URL."/error");    #Descomentar en produccion
    }

?>