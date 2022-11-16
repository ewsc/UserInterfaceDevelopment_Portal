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
    <div class="uk-position-top uk-padding uk-position-fixed menu-is-supreme">
        <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
            <div class="uk-navbar-right">
                <ul class="uk-navbar-nav">
                    <li class="uk-active">
                        <a class="uk-navbar-toggle uk-navbar-toggle-animate" uk-navbar-toggle-icon="ratio: 2;" href="#"></a>
                        <div class="uk-navbar-dropdown">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li><a href="/">Home</a></li>
                                <li><a href="/add.php">Add</a></li>
                                <li><a href="/search.php">Search</a></li>
                                <li><a href="/list.php?sort_by=date_up">List of all articles</a></li>
                                <li><a href="/random_article.php">Random article</a></li>
                                <li><a href="/about.php">About</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>