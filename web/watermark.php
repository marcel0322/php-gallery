<?php

$water_target = $upload_dir . "watermarked_images/" . basename($file["name"]);
$watermark = $_POST["watermark"];

if (file_exists($water_target)) {
    echo "Watermarked file with this name already exists.\n";
    exit;
}

if($mime_type === "image/jpeg") {

    $water_jpeg = imagecreatefromjpeg("$target");
    $white = imagecolorallocate($water_jpeg, 255, 255, 255);
    $pos_x = (imagesx($water_jpeg) - 7.5 * strlen($watermark)) / 2;
    $pos_y = 30;
    imagestring($water_jpeg, 5, $pos_x, $pos_y, $watermark, $white);

    imagejpeg($water_jpeg, $water_target);
    imagedestroy($water_jpeg);

} elseif ($mime_type === "image/png") {

    $water_png = imagecreatefrompng("$target");
    $white = imagecolorallocate($water_png, 255, 255, 255);
    $pos_x = (imagesx($water_png) - 7.5 * strlen($watermark)) / 2;
    $pos_y = 30;
    imagestring($water_png, 5, $pos_x, $pos_y, $watermark, $white);

    imagepng($water_png, $water_target);
    imagedestroy($water_png);

} else echo "Failed to upload image.\n";