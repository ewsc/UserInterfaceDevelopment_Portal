<?php $conn = null ?>

<?php include'header.php' ?>

        <?php
            $reqID = $_GET["id"];
            $sql = "SELECT id, name, added_by, desc_short, desc_full, time_added FROM main WHERE id = $reqID";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc()
        ?>

    <div class="uk-container uk-margin-top">

        <h2 class="uk-margin-remove-bottom"><?php echo $row["name"] ?></h2>
        <?php $tempDate = new DateTime($row["time_added"]); ?>
        <p class="uk-margin-remove-top uk-margin-remove-bottom">by <?php echo $row["added_by"] ?>, <?php echo date_format($tempDate, "H:i, d.m.y") ?></p>

        <p class="uk-margin-small-top"><i><?php echo $row["desc_short"] ?></i></p>

        <p class="uk-text-emphasis"><?php echo $row["desc_full"] ?></p>

    </div>


    <?php include'footer.php' ?>