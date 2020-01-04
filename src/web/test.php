<?php

    if ($handle = opendir('/var/www/dev/src/web/images/thumbnails/')) {

    while (($entry = readdir($handle)) !== false) {
        if($entry != '' && $entry != '.' && $entry != '..') {
        return $entry;
        }
    }
    closedir($handle);
    } else echo "There was a problem with the handle.\n";

?>