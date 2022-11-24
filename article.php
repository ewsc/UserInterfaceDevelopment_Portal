<?php $conn = null ?>

<?php include'header.php' ?>

<?php
$reqID = $_GET["id"];
$sql = "SELECT id, name, added_by, desc_short, desc_full, image, link, date_arr, action_arr, time_added FROM main WHERE id = $reqID";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$tempDate = new DateTime($row["time_added"]);
?>



<div class="sp-height uk-margin-medium-bottom">

    <section>
        <div class="uk-height-large uk-flex uk-flex-center uk-flex-middle uk-background-cover uk-light" data-src="res/article.jpg" uk-img>
            <h1 class="text-shadow"><?php echo $row["name"] ?></h1>
        </div>
    </section>

    <hr class="uk-divider-icon">

    <section>
        <div class="uk-container">
            <h2 class="uk-margin-remove-bottom"><?php echo $row["name"] ?></h2>
            <p class="uk-article-meta uk-margin-remove-top uk-margin-remove-bottom">Added by <i><a href="#"><?php echo $row["added_by"] ?></a></i>, on <?php echo date_format($tempDate, "H:i, d.m.y") ?>.</p>
            <div class="uk-margin-small-top uk-dark">
                <a href="" class="uk-icon-button uk-margin-small-right icon-color" uk-icon="pencil" uk-tooltip="Edit" uk-toggle="target: #edit_modal"></a>
                <a href="" class="uk-icon-button uk-margin-small-right icon-color" uk-icon="trash" uk-tooltip="Delete" uk-toggle="target: #delete_modal"></a>
            </div>
            <p class="uk-text-lead"><?php echo $row["desc_short"] ?></p>

            <?php if($row["image"] != null) {?>
                <div uk-lightbox class="uk-align-center uk-align-right@m uk-text-center">
                    <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                        <a class="" href="res/article_files/<?php echo $row["image"] ?>.jpg">
                            <img class="article-image-border uk-margin-remove-adjacent img-size bw-filter" src="res/article_files/<?php echo $row["image"] ?>.jpg" alt="<?php echo $row["name"] ?>">
                            <div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-default">
                                <p class="uk-h4 uk-margin-remove uk-text-light">Fullscreen</p>
                            </div>
                        </a>
                    </div>
                </div>
            <?php } ?>


            <div>
                <p class="uk-margin-top"><?php echo nl2br(htmlspecialchars($row["desc_full"]),  false)?></p>
            </div>
        </div>
    </section>

    <div class="uk-container uk-margin-medium-top">
        <ul uk-accordion="multiple: true">

        <?php if($row["link"] != null) {?>
            <li>
                <a class="uk-accordion-title" href="#"><h2>YouTube video</h2></a>
                <div class="uk-accordion-content">
                    <div class="uk-flex uk-flex-center">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $row["link"] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </li>
        <?php } ?>


        <?php if($row["date_arr"] != null)  { ?>
            <?php $years = explode(" ", $row["date_arr"]); ?>
            <?php $actions = explode("/", $row["action_arr"]); ?>

            <li>
                <a class="uk-accordion-title" href="#"><h2>Timeline</h2></a>
                <div class="uk-accordion-content">
                    <div class="uk-container">
                        <div class="timeline">
                            <?php array_map(function ($year, $action) { ?>
                            <div class="container right">
                                <div class="uk-card-default uk-card-hover uk-card uk-card-body">
                                    <h2><?php echo $year ?></h2>
                                    <p><?php echo $action ?></p>
                                </div>
                            </div>
                            <?php }, $years, $actions ); ?>
                        </div>
                    </div>
                </div>
            </li>

        <?php } ?>

        </ul>
    </div>

</div>

<div id="edit_modal" uk-modal class=" uk-modal-container">
    <div class="uk-modal-dialog uk-modal-body">
        <h2 class="uk-modal-title">Edit article</h2>
        <form action="edit.php" method="post" enctype="multipart/form-data">
            <hr>
            <label>
                <h3>Input name</h3>
                <input type="text" class="uk-input uk-width-1-1" required placeholder="Input name..." name="name" value="<?php echo $row["name"] ?>">
            </label>
            <hr>
            <label>
                <h3>Give a short description</h3>
                <textarea type="text" class="uk-input uk-width-1-1 width-full" required rows="3" cols="6" maxlength="500" placeholder="Give a short description..."  name="desc_short"><?php echo $row["desc_short"] ?></textarea>
            </label>
            <hr>
            <label>
                <h3>Give a full description</h3>
                <textarea type="text" class="uk-textarea uk-width-1-1 width-full" required rows="7" cols="6" maxlength="10000" placeholder="Give a full description..."  name="desc_full"><?php echo $row["desc_full"] ?></textarea>
            </label>
            <hr>
            <label>
                <h3>(Timeline) Input years, separated with single space</h3>
                <textarea type="text" class="uk-textarea uk-width-1-1 width-full" rows="5" cols="6" maxlength="500" placeholder="Give a short description..."  name="years" ><?php echo $row["date_arr"] ?></textarea>
            </label>
            <hr>
            <label>
                <h3>(Timeline) Input actions, happened in that years, separated with single slash ("/")</h3>
                <textarea type="text" class="uk-textarea uk-width-1-1 width-full" rows="5" cols="6" maxlength="500" placeholder="Give a short description..."  name="actions"><?php echo $row["action_arr"] ?></textarea>
            </label>
            <hr>
            <label>
                <h3>Youtube Link</h3>
                <input type="text" class="uk-input uk-width-1-2" placeholder="Youtube link..."  name="link" value="<?php echo $row["link"] ?>">
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

<?php include "footer.php"; ?>
