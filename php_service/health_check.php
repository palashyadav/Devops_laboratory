<?php
// Simple health endpoint verification
$endpoints = [
    'http://localhost:5000/health',
    'http://localhost:8000/',
    'http://localhost:9000/ping'
];

foreach ($endpoints as $url) {
    $ch = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT => 2
    ]);
    $response = curl_exec($ch);
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    echo "[" . ($http_code === 200 ? 'OK' : 'FAIL') . "] $url\n";
}
?>
