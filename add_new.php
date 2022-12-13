<?php

    include"header.php";


    $name = $conn -> real_escape_string($_POST["name"]);
    $added_by = "guest";
    $desc_short = $conn -> real_escape_string($_POST["desc_short"]);
    $desc_full = $conn -> real_escape_string($_POST["desc_full"]);
    $image_file = $_FILES["image"];
    $link = $_POST["link"];
    $time_arr = $conn -> real_escape_string($_POST["years"]);
    $action_arr = $conn -> real_escape_string($_POST["actions"]);
    $newName = time();
    move_uploaded_file($image_file["tmp_name"], __DIR__ . "/res/article_files/" . $newName . ".jpg");
    $map_loc = $conn -> real_escape_string($_POST["map_loc"]);

    if (!file_exists(__DIR__ . "/res/article_files/" . $newName . ".jpg")) {
        $newName = null;
    }

    $sql = "INSERT INTO main (name, added_by, desc_short, desc_full, image, link, date_arr, action_arr) VALUES ('$name', '$added_by', '$desc_short', '$desc_full', '$newName', '$link', '$map_loc', '$time_arr', '$action_arr')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();

?>
<meta http-equiv="Refresh" content="0; url='/list.php'" />
