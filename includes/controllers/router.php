<?php

// Obtener la cadena de consulta del URL
$request = $_SERVER['QUERY_STRING'];

// Diseccionar la pagina solicitada y las variables del get
$parsed = explode('&' , $request);

// Obtener la página
$page = array_shift($parsed);

// Los siguientes argumentos del arreglo son variables enviadas por GET
$getVars = array();
foreach ($parsed as $argument)
{
	// Dividir la variables GET por medio del '=' para separar las 
        // variables de los valores
	list($variable , $value) = explode('=' , $argument);
	$getVars[$variable] = $value;
}

//this is a test , and we will be removing it later
print "The page your requested is '$page'";
print '<br/>';
$vars = print_r($getVars, TRUE);
print "The following GET vars were passed to the page:<pre>".$vars."</pre>";

?>
