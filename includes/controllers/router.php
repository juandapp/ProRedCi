<?php

//Automatically includes files containing classes that are called
function __autoload($className) {
    //parse out filename where class should be located
    list($filename, $suffix) = explode('_', $className);

    //compose file name
    $file = MODEL_PATH . strtolower($filename) . '.php';

    //fetch file
    if (file_exists($file)) {
        //get file
        include_once($file);
    } else {
        //file does not exist!
        die("File '$filename' containing class '$className' not found.");
    }
}

// Obtener la cadena de consulta del URL
$request = $_SERVER['QUERY_STRING'];

// Diseccionar la pagina solicitada y las variables del get
$parsed = explode('&', $request);

// Obtener la página
$page = array_shift($parsed);

// Los siguientes argumentos del arreglo son variables enviadas por GET
$getVars = array();
foreach ($parsed as $argument) {
    // Dividir la variables GET por medio del '=' para separar las 
    // variables de los valores
    if (strpos($argument, '=')) {
        list($variable, $value) = explode('=', $argument);
        $getVars[$variable] = $value;
    } else {
        $getVars[$argument] = 1;
    }
}

//compute the path to the file
$target = CONTROLLER_PATH . $page . '.php';

//get target
if (file_exists($target)) {
    include_once($target);

    //modify page to fit naming convention
    $class = ucfirst($page) . '_Controller';

    //instantiate the appropriate class
    if (class_exists($class)) {
        $controller = new $class;
    } else {
        //did we name our class correctly?
        die('class does not exist!');
    }
} else {
    //can't find the file in 'controllers'! 
    die('page does not exist!');
}

//once we have the controller instantiated, execute the default function
//pass any GET varaibles to the main method
$controller->main($getVars);
?>
