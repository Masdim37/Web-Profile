<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        //
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        // MATIKAN HALAMAN ERROR CANTIK LARAVEL, MUNCULKAN ERROR ASLINYA!
        $exceptions->render(function (\Throwable $e, Request $request) {
            echo "<div style='font-family: sans-serif; padding: 20px; background: #fff;'>";
            echo "<h2 style='color: red;'>AKAR MASALAH (REAL ERROR):</h2>";
            echo "<b>Pesan Error:</b> " . $e->getMessage() . "<br><br>";
            echo "<b>File:</b> " . $e->getFile() . " (Baris " . $e->getLine() . ")<br><br>";
            echo "<b>Stack Trace:</b><br><textarea style='width:100%; height:400px; background:#f4f4f4; border:1px solid #ccc; padding:10px;'>" . $e->getTraceAsString() . "</textarea>";
            echo "</div>";
            die();
        });
    })->create();