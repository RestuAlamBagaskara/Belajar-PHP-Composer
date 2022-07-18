<?php

    require_once __DIR__ . "/vendor/autoload.php";

    use Bagaskara\BelajarComposer\Data\People;

    $people = new People("Alam");

    echo $people->sayHello("Bagas") . PHP_EOL;