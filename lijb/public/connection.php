<?php

use App\Components\Connections;
use Ratchet\Server\IoServer;

require __DIR__.'/../vendor/autoload.php';

$server = IoServer::factory(
    new Connections(),
    8181
);

$server->run();
























