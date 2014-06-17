<?php include("layout/head.php"); ?>

<div class="row">
    <div class="span12">
        <div class=" hero-unit">
            <h1>Searchly Sample PHP Application</h1>

            <br/>

            <p>This example illustrates basic search features of Searchly.</p>

            <p>Sample application is using <a href="hhttp://www.elasticsearch.org/guide/en/elasticsearch/client/php-api/current/" target="_blank">Elasticsearch PHP client</a>
                </p>

            <p>To get your api key go to <a href="https://dashboard.searchly.com">Searchly dashboard</a> and signup for a free account.</p>

            <p>Go to search_page.php and put replace your connection url dummy one in the configuration element.</p>
            <code>'https://site:key@xyz.searchly.com'</code>

            <br/><br/>

            <p>Click Create Documents at top left then 2 sample documents will be created.</p>

            <p>To test search; enter "Laptop", "Asus" or "Dell" to search box at top right and hit enter.</p>
        </div>
    </div>
</div>

<?php include("layout/footer.php"); ?>