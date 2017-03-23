<?php

require 'vendor/autoload.php';

$hosts = [
    'https://site:key@xyz.searchly.com'
];
$client = Elasticsearch\ClientBuilder::create()
                    ->setHosts($hosts)
                    ->build();
?>
