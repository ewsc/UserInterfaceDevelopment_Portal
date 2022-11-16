<?php
    $conn = null;
    include'header.php';
?>

<div class="uk-container">
    <h1 class="uk-margin-medium-top">list of all articles</h1>
    <?php
    $sql = "SELECT id, name, added_by, desc_short, desc_full, time_added FROM main ORDER BY time_added desc";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) { ?>

    <article class="uk-comment uk-comment-primary uk-margin-medium-top">
        <header class="uk-comment-header">
            <div class="uk-grid-medium uk-flex-middle" uk-grid>
                <div class="uk-width-auto">
                    <span uk-icon="icon: users; ratio: 2;" class="uk-comment-avatar"></span>
                </div>
                <div class="uk-width-expand">
                    <div class="uk-width-expand">
                        <h4 class="uk-comment-title uk-margin-remove"><a class="uk-link-reset" href="#"><?php echo $row["name"]?></a></h4>
                        <?php $tempDate = new DateTime($row["time_added"]); ?>
                        <p class="uk-comment-meta uk-margin-remove"><?php echo date_format($tempDate, "H:i, d.m.y") ?></p>
                        <p class="uk-comment-meta uk-margin-remove-top">by <i><a class="uk-link-heading"><?php echo $row["added_by"]?></a></i></p>
                    </div>
                </div>
            </div>
        </header>
        <div class="uk-comment-body">
            <p><?php echo $row["desc_short"]?></p>
            <div class="uk-text-right">
                <a href="/article.php?id=<?php echo $row["id"] ?>" class="uk-link-heading">Read more...</a>
            </div>
        </div>
    </article>

    <?php
     }
    }
    ?>

</div>

<div class="uk-margin-medium-top">
    <?php include"footer.php" ?>
</div>
