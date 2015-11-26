<?php
$loader = require __DIR__ . '/../vendor/autoload.php';

\Doctrine\Common\Annotations\AnnotationRegistry::registerLoader(array($loader, 'loadClass'));

$config = require __DIR__ . '/../app/config.php';

$app = new \Silex\Application(
    $config['common']
);

require "bootstrap.php";

$app->get('/', function () use ($app) {
    return $app->redirect($app["url_generator"]->generate("beranda"));
});

$app->mount('/', new \Jowy\P2bj\Http\Controller\AppController($app));

$app->error(function (\Exception $e, $code) {
    switch ($code) {
        case 404:
            $message = 'The requested page could not be found.';
            break;
        default:
            $message = 'We are sorry, but something went terribly wrong.';
    }
    return new \Symfony\Component\HttpFoundation\Response($message);
});

$app->run();
