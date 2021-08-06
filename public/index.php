<?php

//error_reporting(0);

require_once __DIR__ . "/../vendor/autoload.php";

use app\core\Application;

$app = new Application(dirname(__DIR__));

$app->run();