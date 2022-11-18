<?php

    include"header.php";


    $name = $conn -> real_escape_string($_POST["name"]);
    $added_by = "guest";
    $desc_short = $conn -> real_escape_string($_POST["desc_short"]);
    $desc_full = $conn -> real_escape_string($_POST["desc_full"]);
    $image_file = $_FILES["image"];
    $link = $_POST["link"];
    $newName = time();
    move_uploaded_file($image_file["tmp_name"], __DIR__ . "/res/article_files/" . $newName . ".jpg");

    if (!file_exists(__DIR__ . "/res/article_files/" . $newName . ".jpg")) {
        $newName = null;
    }

    $sql = "INSERT INTO main (name, added_by, desc_short, desc_full, image, link) VALUES ('$name', '$added_by', '$desc_short', '$desc_full', '$newName', '$link')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();

?>
<meta http-equiv="Refresh" content="0; url='/list.php'" />
