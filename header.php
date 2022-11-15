<html lang="en">
<head>
    <title>projectrpi.io</title>
    <link rel="stylesheet" href="css/uikit.css" />
    <link rel="stylesheet" href="css/default.css" />
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
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
    <div>
        <nav class="uk-navbar-container">
            <div class="uk-container uk-container-expand">
                <div uk-navbar>
                    <div class="uk-navbar-center">
                        <ul class="uk-navbar-nav">
                            <li class="uk-active"><a href="/"><span uk-icon="icon: home; ratio: 2;"></span></a></li>
                            <li class="uk-active">
                                <a href="#"><span uk-icon="icon: search; ratio: 2;"></span></a>
                                <div uk-dropdown="animation: reveal-top; animate-out: true; duration: 250; boundary: !.uk-navbar; stretch: x; flip: false">
                                    <label>
                                        <input type="text" class="uk-input long-input" placeholder="Search..">
                                    </label></div>
                            </li>
                            <li class="uk-active">
                                <a class="uk-navbar-toggle uk-navbar-toggle-animate" uk-navbar-toggle-icon="ratio: 2;" href="#"></a>
                                <div class="uk-navbar-dropdown">
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        <li><a href="/list.php?sort_by=date_up">List of all articles</a></li>
                                        <li><a href="/random_article.php">Random article</a></li>
                                        <li><a href="/about.php">About</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>