<?php
$loader = require __DIR__ . '/../vendor/autoload.php';

\Doctrine\Common\Annotations\AnnotationRegistry::registerLoader(array($loader, 'loadClass'));

$app = new \Silex\Application(
    [
        'debug' => true,
        'dokumen.path' => __DIR__ . '/dokumen'
    ]
);

require "bootstrap.php";

$app->mount('/', new \Jowy\P2bj\Http\Controller\AppController($app));

$app->get('/', function() use($app){
	return $app;
});

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
