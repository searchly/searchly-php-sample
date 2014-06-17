<?php

require "bootstrap.php";

$index = 'laptops_searchly_php_sample';
$type = 'laptop';

$indexParams['index'] = $index;

// Delete index if exists
if ($client->indices()->exists($indexParams)) {
	$client->indices()->delete($indexParams);
}

// Example Index Mapping
$mapping = array(
    '_source' => array(
        'enabled' => true
    ),
    'properties' => array(
        'title' => array(
            'type' => 'string'
        ),
        'price' => array(
            'type' => 'double'
        ),
        'cpu' => array(
            'type' => 'string',
            'index' => 'not_analyzed'
        ),
        'core' => array(
        	'type' => 'integer'
        ),
        'ram' => array(
        	'type' => 'string',
        	'index' => 'not_analyzed'
        ),
        'hard_drive' => array(
			'type' => 'string',
        	'index' => 'not_analyzed'
        ),
        'url' => array(
			'type' => 'string',
        	'index' => 'not_analyzed'
        ),
        'brand' => array(
			'type' => 'string'
        )
    )
);
$indexParams['body']['mappings']['laptop'] = $mapping;

// Create Index
$client->indices()->create($indexParams);

// Laptops
$laptop1 = array(
	"title" => "ASUS K200MA-DS01T 11.6-Inch Touchscreen Laptop (Black)",
	"price" => "293.00",
	"cpu" => "1.86 GHz Intel Celeron",
	"core"=> 2,
	"ram" => "8 GB",
	"hard_drive" => "500 GB",
	"url" => "http://www.amazon.com/K200MA-DS01T-11-6-Inch-Touchscreen-Laptop-Black/dp/B00HZT1T5E",
	"brand"=> "Asus"
	);

$laptop2 = array(
	"title" => "Dell Inspiron 11.6-Inch Touchscreen Laptop (i3137-5003sLV)",
	"price"=> "353.99",
	"cpu" => "1.7 GHz Pentium 3556U",
	"core" => 2,
	"ram" => "4 GB",
	"hard_drive" => "500 GB",
	"url" => "http://www.amazon.com/Dell-Inspiron-11-6-Inch-Touchscreen-i3137-5003sLV/dp/B00I7PAXVG",
	"brand" => "Dell"
	);

 $laptop3 = array (

 	"title" => "ASUS ROG G750JM-DS71 17.3-inch Gaming Laptop, GeForce GTX 860M Graphics",
	"price" => "1278.99",
	"cpu" => "3.4 GHz Core i7-4700HQ",
	"core" => 4,
	"ram" => "12 GB",
	"hard_drive" => "1 TB",
	"brand" => "Asus",
	"url" => "http://www.amazon.com/G750JM-DS71-17-3-inch-Gaming-GeForce-Graphics/dp/B00IKF2H12"	
 	);

// Document addition
$params = array();
$params['body']  = $laptop1;
$params['index'] = $index;
$params['type']  = $type;
$client->index($params);

$params = array();
$params['body']  = $laptop2;
$params['index'] = $index;
$params['type']  = $type;
$client->index($params);

$params = array();
$params['body']  = $laptop3;
$params['index'] = $index;
$params['type']  = $type;
$client->index($params);

?>

<?php include("layout/head.php"); ?>
<h2>Operation Result</h2>

<div>
    3 Laptops are indexed
</div>
</hr>

<?php include("layout/footer.php"); ?>