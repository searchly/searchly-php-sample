<?php

require 'vendor/autoload.php';

$params = array();

$params['hosts'] = array (
    'http://balin-eu-west-1.searchly.com:80'
);

$params['connectionParams']['auth'] = array(
    'site',
    'key',
    'Basic' 
);
$client = new Elasticsearch\Client($params);

?>