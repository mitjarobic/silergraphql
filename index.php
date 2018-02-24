<?php

require 'vendor/autoload.php';

//use Siler\Functional as λ;
use Siler\Route;

require 'rb.php';

Route\get('/', function () {

    R::setup();
    $result = R::findAll('room');
    var_dump($result);

});

