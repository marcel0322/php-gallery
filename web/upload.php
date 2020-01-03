<?php

$error = false;
$file = $_FILES["image"];
$upload_dir = "/var/www/dev/src/web/images/";
$target = $upload_dir . basename($file["name"]);

$file_info = finfo_open(FILEINFO_MIME_TYPE);
$file_name = $file["tmp_name"];

if($file["error"]){
    echo "Cannot process your file.\n";
    exit;
}

$mime_type = finfo_file($file_info, $file_name);

if (file_exists($target)) {
    echo "File with this name already exists.\n";
    $error = true;
}

if($file["size"] > 1000000) {
    echo "File size is too big.\n";
    $error = true;
} //else echo "File size is ok.\n";

if($mime_type != "image/jpeg" && $mime_type != "image/png") {
    echo "File format is not supported. Only JPEG and PNG formats are supported.\n";
    $error = true;
} //else echo "File format is ok.\n";

if($error) {
    echo "Your file was not uploaded.\n";
} else {
    if(move_uploaded_file($file_name, $target)) {
        include 'watermark.php';
        include 'thumbnail.php';
    } else echo "File was not uploaded.\n";
}