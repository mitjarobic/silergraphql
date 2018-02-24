<?php

use Siler\Graphql;

require 'vendor/autoload.php';

$filters = [
    'inbox' => function ($payload, $vars) {
        return $payload['room_name'] == $vars['roomName'];
    },
];

$schema = include __DIR__.'/schema.php';
Graphql\subscriptions($schema, $filters)->run();
//Graphql\subscriptions($schema, $filters, null, null, 8888)->run();