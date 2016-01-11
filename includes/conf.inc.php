<?php
//db: linco_multiplazaweb
//user: linco_multiplaza
//password: 76meLZZd

define('HTTP_PATH','http://'.$_SERVER['HTTP_HOST'].'/');
define('ROOT_PATH',$_SERVER['DOCUMENT_ROOT'].'/');
define('PHP_LIB_PATH',ROOT_PATH.'lib/php/');
define('AJAX_LIB_PATH',ROOT_PATH.'lib/ajax/');
define('MODELS_PATH',ROOT_PATH.'models/');
define('CSS_PATH',HTTP_PATH.'src/css/');
define('JS_PATH',HTTP_PATH.'src/js/');
define('IMAGE_PATH',HTTP_PATH.'src/images/');
define('DB_DRIVER','mysql');
define('DB_HOST','mysql.linco.com.py');
define('DB_USER','linco_multiplaza');
define('DB_PASS','76meLZZd');
define('DB_NAME','linco_multiplazaweb');

/*define('HTTP_PATH','http://'.$_SERVER['HTTP_HOST'].'/multiplazanuevo/');
define('ROOT_PATH',$_SERVER['DOCUMENT_ROOT'].'/multiplazanuevo/');
define('PHP_LIB_PATH',ROOT_PATH.'lib/php/');
define('AJAX_LIB_PATH',ROOT_PATH.'lib/ajax/');
define('MODELS_PATH',ROOT_PATH.'models/');
define('CSS_PATH',HTTP_PATH.'src/css/');
define('JS_PATH',HTTP_PATH.'src/js/');
define('IMAGE_PATH',HTTP_PATH.'src/images/');
define('DB_DRIVER','mysql');
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','linco_multiplaza');*/

define('TITLE','Multiplaza');

?>