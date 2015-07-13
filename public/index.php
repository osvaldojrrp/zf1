<?php
// Define o caminho do diretório application
defined('APPLICATION_PATH') || define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/../application'));

// Define o ambiente da aplicação
defined('APPLICATION_ENV') || define('APPLICATION_ENV', (getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'production'));

// Certifica-se que a biblioteca está no include_path
set_include_path(implode(PATH_SEPARATOR, array(realpath(APPLICATION_PATH . '/../library'), get_include_path())));

/** Zend_Application */
require_once 'Zend/Application.php';

// Cria uma instancia da classe Application do Zend, o bootstrap, and run
$application = new Zend_Application(APPLICATION_ENV, APPLICATION_PATH . '/configs/application.ini');

// Executa o arquivo bootstrap
$application->bootstrap()->run();
