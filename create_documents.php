<?php

require "bootstrap.php";

$indexParams['index'] = 'games_searchly_php_sample';

// Delete index if exists
if ($client->indices()->exists($indexParams)) {
	$client->indices()->delete($indexParams);
}

// Create Index
$client->indices()->create($indexParams);

// Games
$game1 = array(
    'name'      => 'World of Warcraft',
    'description' => 'World of Warcraft (often abbreviated as WoW) is a massively multiplayer online role-playing game (MMORPG) by Blizzard Entertainment' );

$game2 = array('name' => 'StarCraft',
'description' => 'StarCraft is a military science fiction real-time strategy video game developed and published by Blizzard Entertainment');

// Document addition
$params = array();
$params['body']  = $game1;
$params['index'] = 'games_searchly_php_sample';
$params['type']  = 'game';
$client->index($params);

$params = array();
$params['body']  = $game2;
$params['index'] = 'games_searchly_php_sample';
$params['type']  = 'game';
$client->index($params);

?>

<?php include("layout/head.php"); ?>
<h2>Operation Result</h2>

<div>
    2 Documents are indexed
</div>
</hr>

<?php include("layout/footer.php"); ?>