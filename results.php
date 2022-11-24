<?php
    include"header.php";
    $query = $_GET["query"];
?>

<div class="uk-height-large uk-flex uk-flex-center uk-flex-middle uk-background-cover uk-light" data-src="res/search.jpg" uk-img style="background-attachment: fixed">
    <h1 class="text-shadow">Search results</h1>
</div>

<div class="uk-container uk-margin-top sp-height">

    <div class="uk-grid-match uk-grid-divider" uk-grid>

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

        <div class="uk-width-1-3">
            <div class="uk-card uk-card-body uk-card-default uk-margin-bottom">
                <h3 class="uk-margin-remove-bottom"><a class="uk-link-reset" href=""><?php echo $row["name"]?></a></h3>
                <p class="uk-text-meta uk-margin-remove-top">by <i><a href="#"><?php echo $row["added_by"]?></a></i> on <?php echo date_format($tempDate, "H:i, d.m.y") ?></p>
                <hr>
                <p class="uk-text-meta"><?php echo $row["desc_short"] ?></p>
                <a class="uk-button uk-button-text" href="/article.php?id=<?php echo $row["id"] ?>">Read more</a>
            </div>
        </div>

    <?php }
    } else { ?>

        <div class="uk-width-1-1">
            <div class="uk-card uk-card-body uk-card-default uk-margin-bottom">
                <h3 class="uk-margin-remove-bottom"><a class="uk-link-reset" href="">Nothing found.</a></h3>
                <hr>
                <p class="uk-text-meta">No results from your query "<?php echo $query?>"</p>
            </div>
        </div>

    <?php } ?>

    </div>

</div>

<?php include"footer.php" ?>
