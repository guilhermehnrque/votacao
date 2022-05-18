<?php

return [
    'settings' => [
        'determineRouteBeforeAppMiddleware' => false,
        'displayErrorDetails' => true,
        'db' => [
'driver' => 'mysql',
                    'host' => 'localhost',
                    'database' => 'votacao',
                    'username' => 'root',
                    'password' => 'root',
                    'charset'   => 'utf8',
                    'collation' => 'utf8_unicode_ci',
                    'prefix'    => '',
        ]
    ],
];