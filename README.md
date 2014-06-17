## Searchly Sample PHP Application.

This example illustrates basic search features of Searchly powered by [Elasticsearch](http://www.elasticsearch.org).

Sample application is using [Elasticsearch PHP client](hhttp://www.elasticsearch.org/guide/en/elasticsearch/client/php-api/current) PHP ElasticSearch client to integrate with Searchly

To create initial index and sample data click "Create Documents" (2 sample articles will be created.)

To test search; enter "starcraft", "warcraft" or "*" to search box at top right and hit enter.

## Using with Searchly

* Sign Up and get your API-KEY from [here](https://dashboard.searchly.com).
* Go to bootstrap.php and put replace your connection url with the dummy one in the configuration element.


## Local Setup

* Comment out $client = new Elasticsearch\Client();
