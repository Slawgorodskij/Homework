<?php
require __DIR__.'/../vendor/autoload.php';

use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Exception\AMQPProtocolChannelException;

$connection = new AMQPStreamConnection(
    'localhost',
    5672,
    'master',
    'password',
);

try {
    $channel = $connection->channel();
    $channel->queue_declare('tea', false, false, false, false);

    echo " [*] Waiting for messages. To exit press CTRL+C\n";

    $callback= function ($msg) {
        echo "[x] Received {$msg->body} \n";
    };
    $channel->basic_consume('tea', '', false, true, false, false, $callback);

    while ($channel->is_open()){
        $channel->wait();
    };
} catch (AMQPProtocolChannelException | AMQPException $exception){
    echo $exception->getMessage();
}

