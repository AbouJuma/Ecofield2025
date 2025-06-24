<?php
$secret = 'abou1806666';

if (!isset($_GET['key']) || $_GET['key'] !== $secret) {
    http_response_code(403);
    echo "Forbidden";
    exit;
}

// Set trigger flag
file_put_contents(__DIR__ . '/deploy.flag', '1');

echo "Deploy flag set.";