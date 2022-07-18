<?php

    require_once __DIR__ . "/vendor/autoload.php";

    use Monolog\Logger;
    use Monolog\Handler\StreamHandler;

    $log = new Logger('AlamBagas');

    $log->pushHandler(new StreamHandler('application.log', Logger::INFO));

    $log->info("HelloWorld");
    $log->info("Belajar Composer");
    