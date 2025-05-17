<?php

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Check If The Application Is Under Maintenance
|--------------------------------------------------------------------------
|
| If the application is in maintenance / demo mode via the "down" command
| we will load this file so that any pre-rendered content can be shown
| instead of starting the framework, which could cause an exception.
|
*/

$maintenanceFile = __DIR__.'/../storage/framework/maintenance.php';

if (file_exists($maintenanceFile)) {
    require $maintenanceFile;  // Show maintenance page if the app is in maintenance mode.
}

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| this application. We just need to utilize it! We'll simply require it
| into the script here so we don't need to manually load our classes.
|
*/

require __DIR__.'/../vendor/autoload.php';  // Autoload Composer dependencies

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request using
| the application's HTTP kernel. Then, we will send the response back
| to this client's browser, allowing them to enjoy our application.
|
*/

// Ensure the application is bootstrapped and ready to handle requests
$app = require_once __DIR__.'/../bootstrap/app.php';

$kernel = $app->make(Kernel::class);

// Capture the request and pass it through the HTTP kernel to generate a response
$response = $kernel->handle(
    $request = Request::capture()
);

// Send the generated response to the client's browser
$response->send();

// Terminate the kernel to perform any post-response actions
$kernel->terminate($request, $response);
