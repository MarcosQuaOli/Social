<?php

use Slim\App;
use Slim\Routing\RouteCollectorProxy;
use Slim\Views\PhpRenderer;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

/* Controllers */
use App\Controllers\UserController;
use App\Controllers\ChatController;

return function (App $app, $settings) {
    
    $app->get('/', [UserController::class, 'index']);

    $app->get('/feed', function(Request $request, Response $response) {
            
        $renderer = render();
        
        return $renderer->render($response, "/posts/feed.phtml");
        
    });
    
    $app->post('/message', [ChatController::class, 'message']); 

    $app->group('/user', function (RouteCollectorProxy $group) {

        $group->get('/contatos', [UserController::class, 'contato']);

        $group->get('/contatos/{id}', [UserController::class, 'contato']);               

        $group->get('/search', function(Request $request, Response $response) {
            
            $renderer = render();
            
            return $renderer->render($response, "/user/search.phtml");
            
        });

        $group->post('/search', [UserController::class, 'search']);

        $group->get('/follow/{id}', [UserController::class, 'follow']);

        $group->get('/unfollow/{id}', [UserController::class, 'unfollow']);

        $group->get('/profile', [UserController::class, 'show']);

        $group->post('/store', [UserController::class, 'store']);

        $group->post('/login', [UserController::class, 'login']);

        $group->get('/logout', [UserController::class, 'logout']);

    });

    function render() {
        $path = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'views';

        $renderer = new PhpRenderer($path);

        $renderer->setLayout('/layouts/main.phtml');

        return $renderer;    
    }
}

?>