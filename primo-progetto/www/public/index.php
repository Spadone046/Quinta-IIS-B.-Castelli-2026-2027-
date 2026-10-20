<?php

use DI\Container;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../conf/config.php';

$container = new Container();
AppFactory::setContainer($container);
$app = AppFactory::create();

$app->addRoutingMiddleware();
$app->addErrorMiddleware(APP_ENV === 'development', true, true);

// --- Route di esempio ---

$app->get('/', function (Request $request, Response $response) {
    $response->getBody()->write('Lista pagine create');
    return $response;
});

$app->run();

echo '<br>';
echo '<br>';
echo '<form action="hello-world.php" method="post">';
echo "<button type='submit'>Hello World</button>";
echo '</form>';
echo '<form action="tavola-pitagorica.php" method="post">';
echo "<button type='submit'>Tavola Pitagorica</button>";
echo '</form>';
echo '<form action="corso-lingue.php" method="post">';
echo "<button type='submit'>Corso Lingue</button>";
echo '</form>';
echo '<form action="login.php" method="post">';
echo "<button type='submit'>Login</button>";
echo '</form>';
