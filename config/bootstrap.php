<?php

declare(strict_types=1);

use DI\ContainerBuilder;
use DiceRobot\{App, Server};

require_once __DIR__ . "/../vendor/autoload.php";

Co\run(function () {
    $containerBuilder = new ContainerBuilder();

    // Set up settings
    $containerBuilder->addDefinitions(__DIR__ . "/container.php");

    // Build PHP-DI Container instance
    $container = $containerBuilder->build();

    // Create App instance
    $app = $container->get(App::class);

    // Register routes
    $app->registerRoutes(require __DIR__ . "/custom_routes.php");

    // Initialize application
    $app->initialize();

    // Create Server instance
    $server = $container->get(Server::class);

    // Start event loop
    $server->start();
});
