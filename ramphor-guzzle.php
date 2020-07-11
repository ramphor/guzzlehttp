<?php
use GuzzleHttp\Client;

function load_base_guzzle()
{
    $base_autoload = sprintf('%s/base/autoload.php', dirname(__FILE__));
    if (file_exists($base_autoload)) {
        require_once $base_autoload;
    }
}

function load_guzzle_version()
{
    $version_autoload = sprintf('%s/v%s/autoload.php', dirname(__FILE__), PHP_VESION_ID >= 70205 ? '7.0' : '6.5');
    if (file_exists($version_autoload)) {
        require_once $version_autoload;
    }
}

if (!class_exists(Client::class)) {
    load_base_guzzle();
    load_guzzle_version();
}
