<?php

require __DIR__.'/../vendor/autoload.php';

use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Exception\AMQPProtocolChannelException;
use PhpAmqpLib\Message\AMQPMessage;

$connection = new AMQPStreamConnection(
    'localhost',
    5672,
    'master',
    'password',
);
try {
    $channel = $connection->channel();
    $channel->queue_declare('tea', false, false, false, false);

    $message = new AMQPMessage('black');
    $channel->basic_publish($message, '', 'tea');

    $channel->close();
    $connection->close();
} catch (AMQPProtocolChannelException | AMQPException $exception){
    echo $exception->getMessage();
}













