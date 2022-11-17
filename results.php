<?php
    include"header.php";
    $query = $_GET["query"];
?>

<div class="uk-container sp-height">

    <h2 class="uk-margin-medium-top">Search results for query <i><?php echo $_GET["query"] ?></i></h2>

    <?php $sql = "SELECT id, name, added_by, desc_short, desc_full, time_added FROM main WHERE name LIKE '%$query%' ORDER BY time_added desc";
    $result = $conn->query($sql);

    if ($result->num_rows == 0) {
        $sql = "SELECT id, name, added_by, desc_short, desc_full, time_added FROM main WHERE desc_short LIKE '%$query%' ORDER BY time_added desc";
        $result = $conn->query($sql);
    }

    if ($result->num_rows == 0) {
        $sql = "SELECT id, name, added_by, desc_short, desc_full, time_added FROM main WHERE desc_full LIKE '%$query%' ORDER BY time_added desc";
        $result = $conn->query($sql);
    }

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) { ?>

    <?php $tempDate = new DateTime($row["time_added"]); ?>
    <div class="uk-card uk-card-body uk-card-default uk-margin-bottom">
        <article class="uk-article">
            <h2 class="uk-article-title uk-margin-remove-bottom"><a class="uk-link-reset" href=""><?php echo $row["name"]?></a></h2>
            <p class="uk-article-meta uk-margin-remove-top">by <i><a href="#"><?php echo $row["added_by"]?></a></i> on <?php echo date_format($tempDate, "H:i, d.m.y") ?></p>
            <p class="uk-text-lead"><?php echo $row["desc_short"] ?></p>
            <a class="uk-button uk-button-text" href="/article.php?id=<?php echo $row["id"] ?>">Read more</a>
        </article>
    </div>

    <?php }
    } else { ?>
        <div class="uk-position-absolute uk-position-center uk-width-1-1">
            <div class="uk-tile uk-tile-secondary">
                Nothing found.
            </div>
        </div>
    <?php } ?>

</div>

<?php include"footer.php" ?>
