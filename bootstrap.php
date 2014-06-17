<?php

require 'vendor/autoload.php';

$params = array();

$params['hosts'] = array (
    'http://balin-eu-west-1.searchly.com:80'
);

$params['connectionParams']['auth'] = array(
    'site',
    '585b58b54f23718776718e79662c497f',
    'Basic' 
);
$client = new Elasticsearch\Client($params);


// Comment out for localhost 
//$client = new Elasticsearch\Client();


?>