<?php

require "bootstrap.php";

//get the search query
$value = $_GET['q'];

$searchParams['index'] = 'games_searchly_php_sample';
$searchParams['type']  = 'game';
$searchParams['body']['query']['multi_match']['query'] = $value;
$searchParams['body']['query']['multi_match']['fields'] = array('name','description');
$results = $client->search($searchParams);

?>

<?php include("layout/head.php"); ?>

<div>
    <h3>Search Results</h3>
</div>

<div class="row">
    <div class="span12">
        <p>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>
                    Name
                </th>
                <th>
                    Description
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
                echo($result["name"]);
                echo('</td>');
                echo('<td>');
                echo($result["description"]);
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
