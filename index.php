<?php
// psr-4 autoload
require __DIR__ . '/vendor/autoload.php';
try {
    // project setup
    require __DIR__ . '/bootstrap/app.php';

// routing
    require __DIR__ . '/routes.php';
} catch (Throwable $throwable) {
    dd($throwable);
}
