<?php

require '../vendor/autoload.php';

$app = new Phalcon\Mvc\Micro();

// Retrieves all robots
$app->get(
    '/api/robots',
    function () {
        echo 'robots, RUN!';die;
    }
);

$app->handle();