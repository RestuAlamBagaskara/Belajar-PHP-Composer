<?php

    use Bagaskara\BelajarComposer\Customer;

    require_once __DIR__ . "/vendor/autoload.php";

    $customer = new Customer("Alam");

    echo $customer->sayHello() . PHP_EOL;
    echo $customer->sayHello("Restu") . PHP_EOL;

