<?php
$host = '149.202.195.201';
$port = '8888';
// Command that starts the built-in web server
$command = sprintf('php -S %s:%d -t %s >/dev/null 2>&1 & echo $!', $host, $port, '.');
// Execute the command and store the process ID
$output = array();
exec($command, $output);
sleep(1);
$pid = (int) $output[0];

echo sprintf('%s - Web server started on %s:%d with PID %d', date('r'), $host, $port, $pid) . PHP_EOL;

// Kill the web server when the process ends
register_shutdown_function(function() use ($pid) {
    echo sprintf('%s - Killing process with ID %d', date('r'), $pid) . PHP_EOL;
    exec('kill ' . $pid);
});

$startUrl = sprintf('http://%s:%s', $host, $port);
