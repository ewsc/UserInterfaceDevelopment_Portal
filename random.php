<?php include"header.php" ?>

<?php
    $sql = "SELECT id, name, added_by, desc_short, desc_full, image, link, time_added FROM main ORDER BY RAND() LIMIT 1";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $tempDate = new DateTime($row["time_added"]);
?>

<div class="uk-container uk-margin-medium-bottom sp-height">
    <article class="uk-article uk-margin-medium-top">
        <h1 class="uk-article-title uk-margin-small-bottom"><a class="uk-link-reset" href=""><?php echo $row["name"] ?></a></h1>
        <p class="uk-article-meta uk-margin-remove-top uk-margin-small-bottom">added by <i><a href="#"><?php echo $row["added_by"] ?></a></i>, on <?php echo date_format($tempDate, "H:i, d.m.y") ?>.</p>
        <p class="uk-article-meta uk-text-secondary uk-margin-remove-top"><a href="/random.php" class="uk-button uk-button-text uk-text-lowercase">get another random article</a></p>
        <?php if($row["image"] != null) {?>
            <img class="uk-align-left uk-margin-remove-adjacent article-image-border img-size" src="res/article_files/<?php echo $row["image"] ?>.jpg">
        <?php } ?>
        <p class="uk-text-lead"><?php echo $row["desc_short"] ?></p>
        <p class="uk-text-justify"><?php echo $row["desc_full"] ?></p>
    </article>

    <?php if($row["link"] != null) {?>
        <div class="uk-flex uk-flex-center uk-margin-medium-top">
            <div>
                <p class="uk-text-lead">More about this author</p>
                <iframe width="560" height="315" src="<?php echo $row["link"] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    <?php } ?>

</div>



<?php include"footer.php" ?>
