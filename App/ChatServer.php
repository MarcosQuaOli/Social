<?php

use Ratchet\ConnectionInterface;
use Ratchet\MessageComponentInterface;

final class ChatServer implements MessageComponentInterface
{
    private $clients;
    protected $users;

    public function __construct()
    {
        $this->clients = new \SplObjectStorage();
    }

    public function onOpen(ConnectionInterface $conn): void
    {
        $this->clients->attach($conn);
    }

    public function onMessage(ConnectionInterface $from, $data): void
    {
        $data = json_decode($data);
        $chat_msg = $data->chat_msg;
        $user_to = $data->user_to;
        $user_from = $data->user_from;

        $response_from = "<div class='contato__person contato__person--right'><p class='contato__msg contato__msg--right'>".$chat_msg."</p><div class='contato__clear'></div></div>";
        $response_to = "<div class='contato__person contato__person--left'><p class='contato__msg contato__msg--left'>".$chat_msg."</p><div class='contato__clear'></div></div>";

        // Output
        $from->send(json_encode(array("msg"=>$response_from, "user_to"=>$user_to, "user_from"=>$user_from)));

        foreach($this->clients as $client)
        {
            if($from!=$client)
            {
                $client->send(json_encode(array("msg"=>$response_to, "user_to"=>$user_to, "user_from"=>$user_from)));
            }
        }
    }

    public function onClose(ConnectionInterface $conn): void
    {
        $this->clients->detach($conn);
        unset($this->users[$conn->resourceId]);
    }

    public function onError(ConnectionInterface $conn, Exception $exception): void
    {
        $conn->close();
    }
}