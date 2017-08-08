<?php

require 'vendor/autoload.php';

$hosts = [
    'https://site:key@xyz.searchly.com:443'
];
$client = Elasticsearch\ClientBuilder::create()
                    ->setHosts($hosts)
                    ->build();
?>
