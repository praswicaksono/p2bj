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

$app->run();
