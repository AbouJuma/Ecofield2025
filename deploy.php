<?php

// Show errors for debugging (optional – remove in production)
ini_set('display_errors', 1);
error_reporting(E_ALL);

$secret = 'abou1806666'; // match this in GitHub

// Optional security check
if ($_GET['key'] !== $secret) {
    http_response_code(403);
    echo "Forbidden";
    exit;
}

// Change to your project directory
$dir = '/home/ecofield/domains/newsite.ecofieldgroup.com/public_html';
$git = '/usr/bin/git';
// $dir = '/domains/ecofield@s13/public_html/';
// $dir = '/domains/newsite.ecofieldgroup/public_html/';

// Pull latest code
$output = shell_exec("cd {$dir} && git pull origin main 2>&1");

echo "<pre>$output</pre>";