<?php

/**
*     Verifica e apresenta erros eventuais
*/

ini_set('display_errors', 1);

error_reporting(E_ALL);

/**
*     Carrega e inicia aplicação
*/
require_once 'global.php';
require_once 'controllers/ApplicationController.php';

$app = new ApplicationController();

$app->dispatch();
