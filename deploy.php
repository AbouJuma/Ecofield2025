<?php
$secret = 'abou1806666'; // match this in GitHub

// Optional security check
if ($_GET['key'] !== $secret) {
    http_response_code(403);
    echo "Forbidden";
    exit;
}

// Change to your project directory
$dir = '/home/Ecofield/public_html/';

// Pull latest code
$output = shell_exec("cd {$dir} && git pull origin main 2>&1");

echo "<pre>$output</pre>";