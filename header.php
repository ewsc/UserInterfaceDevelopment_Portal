<!DOCTYPE html>
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

<script>
    window.onload = function() {
        let preloader = document.getElementById('preloader');
        setTimeout(() => {
            preloader.style.display = 'none';
        }, 1000);
    }
</script>

<body>

<div class="preloader" id="preloader">
    <div uk-spinner="ratio: 3"></div>
</div>

<header id="top">
    <nav class="uk-navbar-container important-dark" uk-navbar="mode: click">
        <div class="uk-navbar-center">
            <ul class="uk-navbar-nav">
                <li><a href="/" class="uk-active"><span class="uk-margin-small-left">Home</span></a></li>
                <li><a href="/add.php"><span class="uk-margin-small-left">Add</span></a></li>
                <li class="uk-inline">
                    <a href="#"><span class="uk-margin-small-left">Search</span></a>
                    <div class="uk-dropbar uk-dropbar-top" uk-drop="animation: slide-top; animate-out: true; duration: 700; mode: click">
                        <form class="uk-search uk-search-default" action="results.php" method="get">
                            <span class="uk-search-icon-flip" uk-search-icon></span>
                            <input class="uk-search-input" type="search" placeholder="Search" aria-label="Search" name="query">
                        </form>
                    </div>

                </li>
                <li><a href="/list.php"><span class="uk-margin-small-left">All articles</span></a></li>
            </ul>
        </div>
    </nav>
</header>