<?php
    include'header.php';
?>

<div class="bg-list">

    <div class="uk-container uk-padding-large background-custom sp-height">

        <div class="uk-margin-medium-left">
            <h1 class="uk-text-light">list of all articles</h1>
        </div>

        <select name="" id="" class="uk-select uk-margin-bottom" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
            <option value="#" selected disabled>Sort by...</option>
            <option value="/list.php?sort_by=date_up">↑ Date</option>
            <option value="/list.php?sort_by=date_down">↓ Date</option>
            <option value="/list.php?sort_by=author_up">↑ Author</option>
            <option value="/list.php?sort_by=author_down">↓ Author</option>
            <option value="/list.php?sort_by=name_up">↑ Name</option>
            <option value="/list.php?sort_by=name_down">↓ Name</option>
        </select>

        <?php
        if ($_GET) {
            if ($_GET["sort_by"] == "name_up") {
                $sql = "SELECT id, name, added_by, desc_short, desc_full, time_added FROM main ORDER BY name asc";
            } elseif ($_GET["sort_by"] == "name_down") {
                $sql = "SELECT id, name, added_by, desc_short, desc_full, time_added FROM main ORDER BY name desc";
            } elseif ($_GET["sort_by"] == "date_up") {
                $sql = "SELECT id, name, added_by, desc_short, desc_full, time_added FROM main ORDER BY time_added asc";
            } elseif ($_GET["sort_by"] == "date_down") {
                $sql = "SELECT id, name, added_by, desc_short, desc_full, time_added FROM main ORDER BY time_added desc";
            } elseif ($_GET["sort_by"] == "author_down") {
                $sql = "SELECT id, name, added_by, desc_short, desc_full, time_added FROM main ORDER BY added_by desc";
            } elseif ($_GET["sort_by"] == "author_up") {
                $sql = "SELECT id, name, added_by, desc_short, desc_full, time_added FROM main ORDER BY added_by asc";
            } else {
                $sql = "SELECT id, name, added_by, desc_short, desc_full, time_added FROM main ORDER BY time_added desc";
            }
        }
        else {
            $sql = "SELECT id, name, added_by, desc_short, desc_full, time_added FROM main ORDER BY time_added desc";
        }
        $result = $conn->query($sql);

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
        <?php
         }
        }
        ?>


    </div>

</div>

    <?php include"footer.php" ?>
