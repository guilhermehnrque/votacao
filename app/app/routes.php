<?php

declare(strict_types=1);

use App\Application\Actions\User\ListUsersAction;
use App\Application\Actions\User\ViewUserAction;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;
use App\Models\Bootstrap;
use App\Models\User;

return function (App $app) {
    $container = $app->getContainer();    
    Bootstrap::load($container);

    $app->get('/', function (Request $request, Response $response) {
        $response->getbody()->write(json_encode(User::all()->toArray()));
        return $response;
    });

    

};
