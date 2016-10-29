<?php
return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header

        // Renderer settings
        'renderer' => [
            'template_path' => __DIR__ . '/../templates/',

        ],
//        'path'=>[
//        'css_path'=>__DIR__ . '/../templates/css/',
//        'js_path'=>__DIR__ . '/../templates/js/',
//        'img_path'=>__DIR__ . '/../templates/img/'],

        // Monolog settings
        'logger' => [
            'name' => 'slim-app',
            'path' => __DIR__ . '/../logs/app.log',
            'level' => \Monolog\Logger::DEBUG,
        ],
    ],
];
