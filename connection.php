<?php
$host = 'smtp.gmail.com';
$port = 465;

$connection = fsockopen($host, $port, $errno, $errstr, 10);

if (!$connection) {
    echo "Connection to $host on port $port failed: $errstr ($errno)";
} else {
    echo "Successfully connected to $host on port $port!";
    fclose($connection);
}
?>
