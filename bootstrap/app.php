<?php

use Illuminate\Foundation\Application;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Routing\Middleware\ThrottleRequests;

return Application::configure(basePath: dirname(__DIR__))

    ->withRouting(function () {
        // Include the main web routes
        require __DIR__ . '/../routes/web.php';

        // Include additional routes like auth.php
        require __DIR__ . '/../routes/auth.php';

        // Include console routes if needed
        require __DIR__ . '/../routes/console.php';
    })

    ->withMiddleware(function ($middleware) {
        // Define middleware globally here
        $middleware->push(Authenticate::class); // Authentication middleware
        $middleware->push(ThrottleRequests::class); // Rate limiting middleware
    })

    ->withExceptions(function ($exceptions) {
        // Exception handling logic
    })

    ->create();
