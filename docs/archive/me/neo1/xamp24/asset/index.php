<?php
    if (isset($_GET['id'])) {
    $id = htmlspecialchars($_GET['id']);
    $assetContent = file_get_contents("https://assetdelivery.roblox.com/v1/asset/?id=$id");
    if ($assetContent !== false) {
        header("Content-type: application/octet-stream");
        echo $assetContent;
    } else {
        echo "Error";
    }
} else {
    echo "no id given";
}
?>