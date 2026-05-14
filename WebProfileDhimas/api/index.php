<?php

try {
    // Memanggil entry point bawaan Laravel
    require __DIR__ . '/../public/index.php';
} catch (\Throwable $e) {
    // Menangkap error sebelum Laravel mencoba merender tampilan (view)
    echo "<h1 style='color:red;'>Error Asli Ditemukan!</h1>";
    echo "<b>Pesan Error:</b> " . $e->getMessage() . "<br><br>";
    echo "<b>Terjadi di File:</b> " . $e->getFile() . " (Baris " . $e->getLine() . ")<br><br>";
    echo "<b>Stack Trace:</b><br>";
    echo "<textarea style='width:100%; height:400px; background:#f4f4f4;'>" . $e->getTraceAsString() . "</textarea>";
}