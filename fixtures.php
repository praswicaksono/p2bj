<?php

$loader = require __DIR__ . '/vendor/autoload.php';

\Doctrine\Common\Annotations\AnnotationRegistry::registerLoader(array($loader, 'loadClass'));

$config = require __DIR__ . '/app/config.php';

$app = new \Silex\Application($config['common']);

require "public/bootstrap.php";

$loader = new \Doctrine\Common\DataFixtures\Loader();
$loader->addFixture(new \Jowy\P2bj\Fixtures\UserDataFixtures());

$purger = new \Doctrine\Common\DataFixtures\Purger\ORMPurger();
$executor = new \Doctrine\Common\DataFixtures\Executor\ORMExecutor($app['orm.em'], $purger);

$executor->execute($loader->getFixtures());
