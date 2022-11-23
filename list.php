<?php
    include'header.php';

    if ($_GET) {
        if ($_GET["sort_by"] == "name_up") {
            $sql = "SELECT id, name, added_by, desc_short, desc_full, time_added FROM main ORDER BY name asc";
        } elseif ($_GET["sort_by"] == "name_down") {
            $sql = "SELECT id, name, added_by, desc_short, desc_full, time_added FROM main ORDER BY name desc";
        } elseif ($_GET["sort_by"] == "date_up") {
            $sql = "SELECT id, name, added_by, desc_short, desc_full, time_added FROM main ORDER BY time_added asc";
        } elseif ($_GET["sort_by"] == "date_down") {
            $sql = "SELECT id, name, added_by, desc_short, desc_full, time_added FROM main ORDER BY time_added desc";
        } else {
            $sql = "SELECT id, name, added_by, desc_short, desc_full, time_added FROM main ORDER BY time_added desc";
        }
    }
    else {
        $sql = "SELECT id, name, added_by, desc_short, desc_full, time_added FROM main ORDER BY name asc";
    }
?>

<div class="uk-height-large uk-flex uk-flex-center uk-flex-middle uk-background-cover uk-light" data-src="res/list.jpg" uk-img style="background-attachment: fixed">
    <h1 class="text-shadow">List of all articles</h1>
</div>

<div class="uk-container uk-container-large uk-padding sp-height">
    <select name="" id="" class="uk-select uk-margin-bottom" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
        <option value="#" selected disabled>Sort by...</option>
        <option value="/list.php?sort_by=name_up">↑ Name (A-Z)</option>
        <option value="/list.php?sort_by=name_down">↓ Name (Z-A)</option>
        <option value="/list.php?sort_by=date_up">↑ Date added</option>
        <option value="/list.php?sort_by=date_down">↓ Date added</option>
    </select>

    <div class="uk-grid-match uk-grid-divider" uk-grid>

    <?php
    $result = $conn->query($sql);

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
    <?php
        }
    }
    ?>

    </div>


</div>


    <?php include"footer.php" ?>
