<?php

// 1. SUNTIK PAKSA PENGATURAN VERCEL TERMASUK APP_KEY & DEBUG
$vercelPaths = [
    'APP_CONFIG_CACHE' => '/tmp/config.php',
    'APP_EVENTS_CACHE' => '/tmp/events.php',
    'APP_PACKAGES_CACHE' => '/tmp/packages.php',
    'APP_ROUTES_CACHE' => '/tmp/routes.php',
    'APP_SERVICES_CACHE' => '/tmp/services.php',
    'VIEW_COMPILED_PATH' => '/tmp',
    'SESSION_DRIVER' => 'cookie',
    'LOG_CHANNEL' => 'stderr',
    'CACHE_STORE' => 'array',
    'DB_CONNECTION' => 'sqlite',
    'DB_DATABASE' => ':memory:',
    
    // TAMBAHAN BARU:
    'APP_ENV' => 'production',
    'APP_DEBUG' => 'false', // Memaksa pesan error asli muncul
    'APP_KEY' => 'base64:9x9T9zNNVc6AQA4f2QDJO8Xn+4N5qw/XhP6V6Iw6v0I=' // Kunci rahasia dummy agar Laravel tidak crash
];

foreach ($vercelPaths as $key => $value) {
    $_ENV[$key] = $value;
    $_SERVER[$key] = $value;
    putenv("{$key}={$value}");
}

// PAKSA LARAVEL MENGGUNAKAN HTTPS (SANGAT PENTING UNTUK MEMUAT CSS/GAMBAR)
$_SERVER['HTTPS'] = 'on';

// 2. Panggil index.php bawaan Laravel
require __DIR__ . '/../public/index.php';