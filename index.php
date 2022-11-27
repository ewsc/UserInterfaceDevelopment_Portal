<?php
$conn = null;
include"header.php" ;
?>

<?php
$sql = "SELECT id, name, added_by, desc_short, desc_full, image, link, time_added FROM main ORDER BY RAND() LIMIT 1";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$tempDate = new DateTime($row["time_added"]);
?>
<section>
    <div class="uk-height-large uk-flex uk-flex-center uk-flex-middle uk-background-cover uk-light" data-src="res/back_one.jpg" uk-img>
        <h1 class="text-shadow" id="index-header">Everything about writers</h1>
    </div>
</section>

<section>
    <div class="uk-flex uk-padding uk-flex-middle">
        <div class="uk-width-1-2">
            <div class="uk-card uk-card-default uk-card-body uk-card-hover">
                <div class="uk-card-header">
                    <h2 id="index-message">From the creators</h2>
                </div>
                <p id="index-message-text">How often, while reading a book, did you wonder about the author?
                    What inspired him, how did he live? On this site we have tried
                    everything about the author's life to supplement your knowledge.
                    The list is updated daily by many people, and you can also contribute
                    to the development of our site. Enjoy reading!</p>
            </div>
        </div>

        <hr class="uk-divider-vertical uk-margin-right uk-margin-left">

        <div class="uk-width-1-2 uk-cover-container">
            <div class="uk-position-relative uk-visible-toggle uk-dark" tabindex="-1" uk-slideshow="animation: push; autoplay: true; autoplay-interval: 4500;">
                <ul class="uk-slideshow-items">
                    <li>
                        <img src="res/back_three.jpg" alt="" uk-cover>
                        <div class="uk-position-center-left uk-position-small uk-text-left uk-margin-large-left">
                            <h2 uk-slideshow-parallax="x: 100,-100" class="uk-margin-remove-bottom" id="index-motivate-header-1">Discover</h2>
                            <p uk-slideshow-parallax="x: 200,-200" class="uk-margin-remove-top" id="index-motivate-text-1">new biographies daily</p>
                        </div>
                    </li>
                    <li>
                        <img src="res/back_four.jpg" alt="" uk-cover>
                        <div class="uk-position-center-right uk-position-small uk-text-right uk-margin-large-right">
                            <h2 uk-slideshow-parallax="x: 100,-100" class="uk-margin-remove-bottom" id="index-motivate-header-2">Get inspired</h2>
                            <p uk-slideshow-parallax="x: 200,-200" class="uk-margin-remove-top" id="index-motivate-text-2">and start doing miracles</p>
                        </div>
                    </li>
                    <li>
                        <img src="res/back_five.jpg" alt="" uk-cover>
                        <div class="uk-position-center uk-position-small uk-text-center">
                            <h2 uk-slideshow-parallax="x: 100,-100" class="uk-margin-remove-bottom" id="index-motivate-header-3">Learn</h2>
                            <p uk-slideshow-parallax="x: 200,-200" class="uk-margin-remove-top" id="index-motivate-text-3">and never stop</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="uk-height-1-1 uk-background-cover" data-src="res/back_two.jpg" uk-img>
        <div class="uk-flex uk-flex-center uk-flex-middle uk-padding">
            <div class="uk-width-2-3">
                <div class="">
                    <div class="uk-card uk-card-hover uk-card-default uk-card-body uk-text-center">
                        <h2 class=""><span uk-icon="icon: bookmark; ratio: 2;" class="uk-margin-small-right"></span><span id="header-pod">Person of the day</span></h2>
                    </div>
                </div>

                <div class="uk-position-relative uk-position-right uk-margin-top">
                    <div class="uk-card uk-card-hover uk-card-default">
                        <div class="uk-card-header">
                            <h2><?php echo $row["name"] ?></h2>
                        </div>
                        <div class="uk-card-body">
                            <p class="uk-text-lead"><?php echo $row["desc_short"] ?></p>
                            <div class="uk-text-right">
                                <a class="uk-button uk-button-text" href="/article.php?id=<?php echo $row["id"] ?>" id="readmore">Read more</a>
                            </div>
                        </div>
                        <div class="uk-card-footer">
                            <p class="uk-article-meta"><span id="added-by">added by</span> <i><a href="#"><?php echo $row["added_by"]?></a></i> <span id="added-on">on</span> <?php echo date_format($tempDate, "H:i, d.m.y") ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="uk-padding">
        <div class="uk-text-center">
            <h3 id="header-about-us">About us</h3>
        </div>
        <div class="uk-flex uk-flex-center uk-flex-middle">
            <div class="uk-card uk-card-default uk-card-hover">
                <div class="uk-card-header">
                    <img class="uk-comment-avatar avatar-rounded uk-margin-small-right" src="res/user_files/guslya.jpg" width="50" height="50" alt=""> Azam Alamov
                </div>
                <div class="uk-card-body">
                    <span id="about-1">CEO, lead programmer & designer</span>
                </div>
                <div class="uk-card-footer">
                    <div class="uk-text-center">
                        <a class="uk-button uk-button-text" href="https://github.com/gthanksg">GitHub</a>
                        <a class="uk-button uk-button-text uk-margin-left" href="https://linkedin.com/in/azam-alamov">LinkedIn</a>
                    </div>
                </div>
            </div>

            <div class="uk-card uk-card-default uk-card-hover uk-margin-left">
                <div class="uk-card-header">
                    <img class="uk-comment-avatar avatar-rounded uk-margin-small-right" src="res/user_files/serj.jpg" width="50" height="50" alt=""> Zaur Rustamov
                </div>
                <div class="uk-card-body">
                    <span id="about-2">Head of Communications</span>
                </div>
                <div class="uk-card-footer">
                    <div class="uk-text-center">
                        <a class="uk-button uk-button-text" href="https://github.com/gthanksg">GitHub</a>
                        <a class="uk-button uk-button-text uk-margin-left" href="https://linkedin.com/in/azam-alamov">LinkedIn</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include"footer.php" ?>
