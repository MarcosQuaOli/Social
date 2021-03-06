<?php

namespace App\Controllers;

use Psr\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

use App\Models\Chat;

class ChatController 
{

    protected $container;

    // constructor receives container instance
    public function __construct(ContainerInterface $container) 
    {
        $this->container = $container;
    }
    
    public function show(Request $request, Response $response) 
    {

        $chat = new Chat();

        $chat->setAll($_GET);

        $data = $chat->getAll();

        $response->getBody()->write(json_encode($data));
        return $response->withStatus(200);

    }
    
    public function message(Request $request, Response $response) 
    {

        $chat = new Chat();

        $chat->setAll($_POST);

        $chat->insert();
        
        return $response->withStatus(200);

    }
}