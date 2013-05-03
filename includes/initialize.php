<?php

// Separador de los archivos dependiendo de Sistema Operativo
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

// Dirección del servidor
defined('SERVER_ROOT') ? NULL : define('SERVER_ROOT', dirname(dirname(__FILE__)).DS);        

// Dirección del sitio web
defined('SITE_ROOT') ? NULL : define('SITE_ROOT', 'http://localhost/ProRedCi'.DS);    

// Dirección de los includes
defined('LIB_PATH') ? null : define('LIB_PATH', SERVER_ROOT.'includes'.DS);

// Dirección de los controladores
defined('CONTROLLER_PATH') ? NULL : define('CONTROLLER_PATH', LIB_PATH.'controllers' . DS);
echo CONTROLLER_PATH;
// Controladores
require_once(CONTROLLER_PATH.'router.php');




?>