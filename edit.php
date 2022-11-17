<?php
include"header.php";
$id = $_POST["id"];
$name = $_POST["name"];
$desc_short = $_POST["desc_short"];
$desc_full = $_POST["desc_full"];
$link = $_POST["link"];

$sql = "UPDATE main SET name='$name', desc_short='$desc_short', desc_full='$desc_full', link='$link' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Deleted successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>

<meta http-equiv="Refresh" content="0; url='/list.php'" />
