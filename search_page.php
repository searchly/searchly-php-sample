<?php

require "bootstrap.php";

$index = 'laptops_searchly_php_sample';
$type = 'laptop';

//get the search query
$query = $_GET['q'];

//get filter of agg/facet
$aggFilterValue = $_GET['agg'];
$aggFilterField = $_GET['agg_field'];

$searchParams['index'] = $index;
$searchParams['type']  = $type;

$searchParams['body']['query']['filtered']['query']['match']['title'] = $query;

if ($aggFilterValue) {
    $searchParams['body']['query']['filtered']['filter']['term'][$aggFilterField] = $aggFilterValue;
}

$searchParams['body']['aggs']['ram']['terms']['field'] = 'ram';
$searchParams['body']['aggs']['hard_drive']['terms']['field'] = 'hard_drive';
$searchParams['body']['aggs']['core']['terms']['field'] = 'core';

$results = $client->search($searchParams);

?>

<?php include("layout/head.php"); ?>


<div class="row">
    <div class="span3">
        <div>
            <h3>Facets</h3>
            <hr/>
        </div>

        <dl>
            <?php 

            echo('<dt>Ram</dt>');
            $aggs = $results['aggregations']['ram']['buckets'];
            for ($i = 0; $i < count($aggs); ++$i) {
                $agg_result = $aggs[$i];
                echo('<dd>' . "<a href='search_page.php?q={$query}&agg={$agg_result['key']}&agg_field=ram'>" . $agg_result['key'] . ' (' . $agg_result['doc_count'] .')' . '</a></dd>'); 
            }

            echo('<dt>Hard Drive</dt>');
            $aggs = $results['aggregations']['hard_drive']['buckets'];
            for ($i = 0; $i < count($aggs); ++$i) {
                $agg_result = $aggs[$i];
                echo('<dd>' . "<a href='search_page.php?q={$query}&agg={$agg_result['key']}&agg_field=hard_drive''>" . $agg_result['key'] . ' (' . $agg_result['doc_count'] .')' . '</a></dd>'); 
            }

            echo('<dt>Cpu Core</dt>');
            $aggs = $results['aggregations']['core']['buckets'];
            for ($i = 0; $i < count($aggs); ++$i) {
                $agg_result = $aggs[$i];
                echo('<dd>' . "<a href='search_page.php?q={$query}&agg={$agg_result['key']}&agg_field=core'>" . $agg_result['key'] . ' (' . $agg_result['doc_count'] .')' . '</a></dd>'); 
            }

            ?>
        </dl>

    </div>
    <div class="span9">
        <div>
            <h3>Search Results</h3>
            <hr/>
        </div>
        <p>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>
                    Title
                </th>
                <th>
                    Price
                </th>
            </tr>
            </thead>
            <tbody>
            <?php
            $hits = $results['hits']['hits'];

            for ($i = 0; $i < count($hits); ++$i) {
                $result = $hits[$i]["_source"];
                echo('<tr>');
                echo('<td>');
                echo($result["title"]);
                echo('</td>');
                echo('<td>');
                echo($result["price"]);
                echo('</td>');
                echo('</tr>');
            }
            ?>
            </tbody>
        </table>

        </p>
    </div>
</div>
<?php include("layout/footer.php"); ?>
