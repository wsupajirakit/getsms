<?php

// $target_dir = "http://underfox.xyz/getsms/images/";
$target_dir = "image/";

$target_file = $target_dir . basename($_POST["file_name"]);
// $image = $_FILES["user_image"];
if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    echo "upload success file name".$_POST["file_name"];
} else {
    echo "upload fail";
}
