<?php
// Incluindo biblioteca e classe do chat
require 'vendor/autoload.php';
require 'App/ChatServer.php';

use Ratchet\Http\HttpServer;
use Ratchet\Server\IoServer;
use Ratchet\WebSocket\WsServer;

// Iniciando conexão
$server = IoServer::factory(
    new HttpServer(
        new WsServer(
            new ChatServer()
        )
    ),
    8085
); 

$server->run();

?>