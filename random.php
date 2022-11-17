<?php include"header.php" ?>

<?php
    $sql = "SELECT id, name, added_by, desc_short, desc_full, image, link, time_added FROM main ORDER BY RAND() LIMIT 1";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $tempDate = new DateTime($row["time_added"]);
?>

<div class="uk-container uk-margin-medium-bottom  uk-height-1-1">
    <article class="uk-article uk-margin-medium-top">
        <h1 class="uk-article-title uk-margin-remove-bottom"><a class="uk-link-reset" href=""><?php echo $row["name"] ?></a></h1>
        <p class="uk-article-meta uk-margin-remove-top">added by <i><a href="#"><?php echo $row["added_by"] ?></a></i>, on <?php echo date_format($tempDate, "H:i, d.m.y") ?>.</p>
        <?php if($row["image"] != null) {?>
            <img class="uk-align-left uk-margin-remove-adjacent article-image-border uk-width-1-2" src="res/article_files/<?php echo $row["image"] ?>.jpg" alt="<?php echo $row["name"] ?> image">
        <?php } ?>
        <p class="uk-text-lead"><?php echo $row["desc_short"] ?></p>
        <p><?php echo $row["desc_full"] ?></p>
    </article>

    <?php if($row["link"] != null) {?>
        <div class="uk-flex uk-flex-center uk-margin-medium-top">
            <div>
                <p class="uk-text-lead">More about this author</p>
                <iframe width="560" height="315" src="<?php echo $row["link"] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    <?php } ?>

    <div class="uk-flex uk-flex-center uk-margin-medium-top">
        <button class="uk-button uk-button-secondary uk-margin-small-right" type="button" uk-toggle="target: #edit_modal">Edit</button>
        <button class="uk-button uk-button-danger uk-margin-small-right" type="button" uk-toggle="target: #delete_modal">Delete</button>
    </div>
</div>

<div id="edit_modal" uk-modal class=" uk-modal-container">
    <div class="uk-modal-dialog uk-modal-body">
        <h2 class="uk-modal-title">Edit article</h2>
        <form action="edit.php" method="post" enctype="multipart/form-data">
            <hr>
            <label>
                <h3>Input name</h3>
                <input type="text" class="uk-input uk-width-1-1" required placeholder="Input name..." name="name" value="<?php echo $row["name"] ?>" title="Accept numbers and letters only">
            </label>
            <hr>
            <label>
                <h3>Give a short description</h3>
                <textarea type="text" class="uk-input uk-width-1-1 width-full" required rows="3" cols="6" maxlength="500" placeholder="Give a short description..."  name="desc_short" title="Accept numbers and letters only"><?php echo $row["desc_short"] ?></textarea>
            </label>
            <hr>
            <label>
                <h3>Give a full description</h3>
                <textarea type="text" class="uk-textarea uk-width-1-1 width-full" required rows="7" cols="6" maxlength="3000" placeholder="Give a full description..."  name="desc_full" title="Accept numbers and letters only"><?php echo $row["desc_full"] ?></textarea>
            </label>
            <hr>
            <label>
                <h3>Youtube Link</h3>
                <input type="url" class="uk-input uk-width-1-2" placeholder="Youtube link..."  name="link" value="<?php echo $row["link"] ?>">
            </label>
            <hr>

            <input type="text" class="uk-invisible" value="<?php echo $row["id"] ?>" name="id">
            <div class="uk-margin-medium-bottom uk-align-right">
                <button type="submit" class="uk-button uk-button-secondary uk-button-body">Edit</button>
                <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
            </div>
        </form>
    </div>
</div>

<div id="delete_modal" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <h2 class="uk-modal-title">Delete this article?</h2>
        <p>Are you sure that you want to delete this article? This action can't be undone.</p>
        <p class="uk-text-right">
        <form action="delete.php" method="post" enctype="multipart/form-data">
            <div class="uk-align-right">
                <input type="text" class="uk-invisible" value="<?php echo $row["id"] ?>" name="id">
                <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
                <button class="uk-button uk-button-danger" type="submit">Delete</button>
            </div>
        </form>
        </p>
    </div>
</div>


<?php include"footer.php" ?>
