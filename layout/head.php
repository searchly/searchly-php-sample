<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport" />

    <title>Searchly PHP Sample</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/main.css" rel="stylesheet" type="text/css" />
    <script src="js/bootstrap.min.js" type="text/javascript">
    </script>
</head>

<body>
<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="brand" href="index.php">Searchly PHP Sample</a>

            <div class="nav-collapse">
                <ul class="nav">
                    <li><a href="index.php">Home</a></li>

                    <li><a href="about.php">About</a></li>

                    <li><a href="create_documents.php">Create Documents</a></li>
                </ul>

                <div style="margin-left: 2em" class="nav pull-right">
                    <form action="search_page.php" class="navbar-search pull-left" method="GET">
                        <input class="search-query span2" id="q" name="q" placeholder=
                                "search" type="text" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">