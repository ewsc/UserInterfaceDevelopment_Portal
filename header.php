<html lang="en">
<head>
    <title>Writers.</title>
    <link rel="stylesheet" href="css/uikit.css" />
    <link rel="stylesheet" href="css/default.css" />
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="res/logo.png" />
</head>

    <?php
    $servername = "projectrpi.io";
    $username = "root";
    $password = "";
    $dbname = "projectrpi";
    $conn = new mysqli($servername, $username, $password, $dbname);
?>

<body>
<header>
    <div class="uk-position-fixed uk-position-right uk-padding menu-is-supreme">
        <a href="#menu" class="uk-icon-button uk-margin-small-right uk-background-secondary" uk-icon="menu" uk-toggle=""></a>
    </div>

    <div id="menu" uk-offcanvas="mode: push; flip: true;">
        <div class="uk-offcanvas-bar">
            <button class="uk-offcanvas-close" type="button" uk-close></button>
            <ul class="uk-list">
                <li><a href="/"><span uk-icon="home"></span><span class="uk-margin-small-left">Home</span></a></li>
                <li><a href="/add.php"><span uk-icon="plus"></span><span class="uk-margin-small-left">Add</span></a></li>
                <li><a href="/search.php"><span uk-icon="search"></span><span class="uk-margin-small-left">Search</span></a></li>
                <li><a href="/list.php"><span uk-icon="list"></span><span class="uk-margin-small-left">List of all articles</span></a></li>
                <li><a href="/random_article.php"><span uk-icon="tiktok"></span><span class="uk-margin-small-left">Random article</span></a></li>
                <li><a href="/about.php"><span uk-icon="users"></span><span class="uk-margin-small-left">About</span></a></li>
            </ul>
        </div>
    </div>
</header>