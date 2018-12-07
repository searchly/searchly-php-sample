<?php

require 'vendor/autoload.php';

$hosts = [
    'https://site:49667ddfb3753116d716368190c60350@thorin-us-east-1.searchly.com:443'
];
$client = Elasticsearch\ClientBuilder::create()
                    ->setHosts($hosts)
                    ->build();
?>
