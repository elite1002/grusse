<?php
// Routes

$app->get('/', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'login.php', $args);
});

$app->get('/alex[/{hjk}]', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' alex");

    // Render index view
    return $this->renderer->render($response, 'alex.php', $args);
});
