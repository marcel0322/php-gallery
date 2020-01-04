<?php

$thumb_target = $upload_dir . "thumbnails/" . basename($file["name"]);

if (file_exists($thumb_target)) {
    echo "Thumbnail of this file with this name already exists.\n";
    exit;
}

if($mime_type === "image/jpeg") {

    $thumb_jpeg = imagecreatefromjpeg("$water_target");
    $thumbed_jpeg = imagescale($thumb_jpeg, 200, 125);
    imagejpeg($thumbed_jpeg, $thumb_target);
    imagedestroy($thumb_jpeg);
    imagedestroy($thumbed_jpeg);
    echo "File uploaded successfully.\n";

} elseif ($mime_type === "image/png") {

    $thumb_png = imagecreatefrompng("$water_target");
    $thumbed_png = imagescale($thumb_png, 200, 125);
    imagepng($thumbed_png, $thumb_target);
    imagedestroy($thumb_png);
    imagedestroy($thumbed_png);
    echo "File uploaded successfully.\n";

} else echo "Failed to upload image.\n";