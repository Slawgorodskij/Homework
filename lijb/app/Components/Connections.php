<?php

namespace App\Components;

use Exception;
use Ratchet\ConnectionInterface;
use Ratchet\MessageComponentInterface;
use SplObjectStorage;

class Connections implements MessageComponentInterface
{
    protected SplObjectStorage $clients;

    public function __construct()
    {
        $this->clients = new SplObjectStorage();
    }

    function onOpen(ConnectionInterface $conn)
    {
        $this->clients->attach($conn);
        echo "New connection! {$conn->resourceId} \n";
    }

    function onClose(ConnectionInterface $conn)
    {
        $this->clients->detach($conn);
        echo "Close connection! {$conn->resourceId} \n";
    }

    function onError(ConnectionInterface $conn, Exception $e)
    {
        echo "An error has occurred: {$e->getMessage()} \n";
    }

    function onMessage(ConnectionInterface $from, $msg)
    {
        $clientCount = $this->clients->count();
        echo sprintf(
            "Connection %d sending message '%s' to %d other connection%s \n",
            $from->resourceId,
            $msg,
            $clientCount,
            $clientCount === 1 ? '' : 's',
        );

        foreach ($this->clients as $client)
        {
            if($from !== $client)
            {
                $client->send($msg);
            }
        }
    }
}



















