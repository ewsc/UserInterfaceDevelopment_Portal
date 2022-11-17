<?php

    include"header.php";


    $name = $_POST["name"];
    $added_by = "guest";
    $desc_short = $_POST["desc_short"];
    $desc_full = $_POST["desc_full"];
    $image_file = $_FILES["image"];
    $link = $_POST["link"];
    $newName = time();
    move_uploaded_file($image_file["tmp_name"], __DIR__ . "/res/article_files/".$newName.".jpg");

    $sql = "INSERT INTO main (name, added_by, desc_short, desc_full, image, link) VALUES ('$name', '$added_by', '$desc_short', '$desc_full', '$newName', '$link')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();

?>
<meta http-equiv="Refresh" content="0; url='/list.php'" />
