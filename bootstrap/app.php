<?php

// dot env config
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();


// database config
use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection([
    'driver' => $_ENV['DB_DRIVER']?? 'mysql',
    'host' => $_ENV['DB_HOST']?? 'localhost',
    'database' => $_ENV['DB_DATABASE']?? 'app',
    'username' => $_ENV['DB_USERNAME']?? 'root',
    'password' => $_ENV['DB_PASSWORD']?? 'root',
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix' => '',
]);


// Make this Capsule instance available globally via static methods... (optional)
$capsule->setAsGlobal();

// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent();