<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/controller/ControllerNegozio.php';
require __DIR__ . '/controller/SiteController.php';
require_once("./Negozio.php");
require_once("./Articolo.php");

$app = AppFactory::create();

$app->get('/', 'SiteController:home');

$app->get('/negozio', 'ControllerNegozio:index');

$app->get('/articoli', 'ControllerNegozio:getArticoli');
$app->get('/articoli/{id}', 'ControllerNegozio:getApiArticoli');

$app->get('/ordini', 'ControllerNegozio:getOrdini');

$app->run();


?>