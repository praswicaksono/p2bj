<?php

/**
 * register doctrine
 */
$app->register(
    new \Silex\Provider\DoctrineServiceProvider(),
    [
        'db.options' => [
            'driver' => 'pdo_mysql',
            'host' => '127.0.0.1',
            'username' => 'root',
            'password' => '123',
            'dbname' => 'p2bj'
        ]
    ]
);

/**
 * register doctrine orm
 */
$app->register(
    new \Dflydev\Silex\Provider\DoctrineOrm\DoctrineOrmServiceProvider(),
    [
        'orm.em.options' => [
            'mappings' => [
                [
                    'type' => 'annotation',
                    'namespace' => 'Jowy\P2bj\Domain\Entity',
                    'path' => __DIR__ . '/../src/Domain/Entity',
                ]
            ],
        ],
        'orm.proxies_dir' => __DIR__ . '/../app/proxies/',
    ]
);

/**
 * twig templating
 */
$app->register(
    new \Silex\Provider\TwigServiceProvider(),
    [
        'twig.path' => __DIR__ . '/../src/Templates',
        'twig.options' => [
            'cache' => __DIR__ . '/../app/cache/app_template',
            'auto_reload' => true
        ]
    ]
);

/**
 * logging
 */
$app->register(
    new \Silex\Provider\MonologServiceProvider(),
    ['monolog.logfile' => __DIR__ . '/../app/logs/development.log']
);

/**
 * register web profiler
 */
if ($app['debug']) {
    Symfony\Component\Debug\Debug::enable(E_ALL, true);
    $app->register(new Silex\Provider\WebProfilerServiceProvider(), [
        'profiler.cache_dir' => __DIR__ . '/../app/cache/profiler'
    ]);
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

$app['user.repository'] = function () use ($app) {
    return $app['orm.em']->getRepository(\Jowy\P2bj\Domain\Entity\User::class);
};
