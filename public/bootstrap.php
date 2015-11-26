<?php

/**
 * register doctrine
 */
$app->register(new \Silex\Provider\DoctrineServiceProvider(), $config['db']);

/**
 * register doctrine orm
 */
$app->register(new \Dflydev\Silex\Provider\DoctrineOrm\DoctrineOrmServiceProvider(), $config['orm']);

/**
 * twig templating
 */
$app->register(new \Silex\Provider\TwigServiceProvider(), $config['twig']);

/**
 * logging
 */
$app->register(new \Silex\Provider\MonologServiceProvider());

/**
 * register web profiler
 */
if ($app['debug']) {
    Symfony\Component\Debug\Debug::enable(E_ALL, true);
    $app->register(new Silex\Provider\WebProfilerServiceProvider(), $config['profiler']);
}

/**
 * register form service provider
 */
$app->register(new \Silex\Provider\FormServiceProvider());

/**
 * register translation service
 */
$app->register(new \Silex\Provider\TranslationServiceProvider());

/**
 * register session service provider
 */
$app->register(new \Silex\Provider\SessionServiceProvider());

/**
 * register url generator service provider
 */
$app->register(new \Silex\Provider\UrlGeneratorServiceProvider());

/**
 * register service controller service provider
 */
$app->register(new \Silex\Provider\ServiceControllerServiceProvider());

/**
 * register http fragment service provider
 */
$app->register(new \Silex\Provider\HttpFragmentServiceProvider());

/**
 * register validator service provider
 */
$app->register(new \Silex\Provider\ValidatorServiceProvider());

/**
 * register entity repository
 */
$app['user.repository'] = function () use ($app) {
    return $app['orm.em']->getRepository(\Jowy\P2bj\Domain\Entity\User::class);
};
