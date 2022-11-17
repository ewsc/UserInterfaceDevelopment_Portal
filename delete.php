<?php
    include"header.php";
    $id = $_POST["id"];
    $sql = "DELETE from main WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Deleted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

?>

<meta http-equiv="Refresh" content="0; url='/list.php'" />
