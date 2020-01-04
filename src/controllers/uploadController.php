<?php

//require '../views/gallery_view.php';
//require '../views/form_view.php';

require '../business/file_upload.php';
require '../views/form_view.php';

class uploadController {
    public function uploadFile() {
        $upload = new fileUpload();
        $upload -> upload();
        $upload -> watermark();
        $upload -> thumbnail();

        return new formView;
    }
}