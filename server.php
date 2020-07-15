<?php

use Ratchet\Http\HttpServer;
use Ratchet\Server\IoServer;
use Ratchet\WebSocket\WsServer;

// Incluindo biblioteca e classe do chat
require 'vendor/autoload.php';
require 'App/ChatServer.php';

// Iniciando conexão
$server = IoServer::factory(
    new HttpServer(
        new WsServer(
            new ChatServer()
        )
    ),
    8080
);

$server->run();

?>