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
    <script src="https://cdn.jsdelivr.net/gh/askask11/multi-language@0.1.4/dist/multi-language.min.js" integrity="sha256-xL5PbSBwYLKYaUvdDP2S/lnF9s3oAPm/92GnACZBe2c=" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/react@18/umd/react.development.js" crossorigin></script>
    <script src="https://unpkg.com/react-dom@18/umd/react-dom.development.js" crossorigin></script>
    <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
                <li><a href="/" class="uk-active" id="header-home"><span class="uk-margin-small-left"><span uk-icon="home"</span></span></a></li>
                <li><a href="/add.php" id="header-add"><span class="uk-margin-small-left"><span uk-icon="plus"></span></span></a></li>
                <li class="uk-inline">
                    <a href="#" id="header-search"><span class="uk-margin-small-left"><span uk-icon="search"></span></span></a>
                    <div class="uk-dropbar uk-dropbar-top" uk-drop="animation: slide-top; animate-out: true; duration: 700; mode: click">
                        <form class="uk-search uk-search-default" action="results.php" method="get">
                            <span class="uk-search-icon-flip" uk-search-icon></span>
                            <input class="uk-search-input" type="search" placeholder="Search" id="header-search-text" aria-label="Search" name="query">
                        </form>
                    </div>

                </li>
                <li><a href="/list.php" id="header-articles"><span class="uk-margin-small-left"><span uk-icon="thumbnails"></span></span></a></li>
                <li class="uk-inline">
                    <a href="#" id="header-language"><span uk-icon="world"></span></a>
                    <div class="uk-dropbar uk-dropbar-top" uk-drop="animation: slide-top; animate-out: true; duration: 700; mode: click">
                        <select id="get-lang" class="uk-select">
                            <option value="en" onclick="UIkit.notification({message: 'Language changed.', pos: 'top-right'})">
                                English (Default)
                            </option>
                            <option value="de" onclick="play();UIkit.notification({message: 'Sprache geändert.', pos: 'top-right'})">
                                Deutsche
                            </option>
                            <option value="ru" onclick="UIkit.notification({message: 'Язык сменен.', pos: 'top-right'})">
                                Русский
                            </option>
                        </select>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>
