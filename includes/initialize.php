<?php

// Separador de los archivos dependiendo de Sistema Operativo
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

// Dirección del servidor
defined('SERVER_ROOT') ? NULL : define('SERVER_ROOT', dirname(dirname(__FILE__)).DS);        

// Dirección del sitio web
defined('SITE_ROOT') ? NULL : define('SITE_ROOT', 'http://localhost/ProRedCi'.DS);    

// Dirección de los includes
defined('LIB_PATH') ? null : define('LIB_PATH', SERVER_ROOT.'includes'.DS);

//
defined('PUBLIC_PATH') ? null : define('PUBLIC_PATH', SERVER_ROOT.'public'.DS);

// Dirección de los controladores
defined('CONTROLLER_PATH') ? NULL : define('CONTROLLER_PATH', LIB_PATH.'controllers' . DS);

// Dirección de los modelos
defined('MODEL_PATH') ? NULL : define('MODEL_PATH', LIB_PATH.'models' . DS);

// Dirección de los controladores
defined('VIEW_PATH') ? NULL : define('VIEW_PATH', PUBLIC_PATH.'views' . DS);

// Controladores





?>