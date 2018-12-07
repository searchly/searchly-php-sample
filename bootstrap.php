<?php

require 'vendor/autoload.php';

$hosts = [
    'https://site:xxxxx@thorin-us-east-1.searchly.com:443'
];
$client = Elasticsearch\ClientBuilder::create()
                    ->setHosts($hosts)
                    ->build();
?>
