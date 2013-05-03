<?php

// Separación de los archivos dependiendo de Sistema Operativo
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

// Dirección del servidor
defined('SERVER_ROOT') ? NULL : define('SITE_ROOT', dirname(dirname(__FILE__)) . DS);        

// Dirección del sitio web
define('SITE_ROOT' , 'C:'.DS.'wamp'.DS.'www');

?>