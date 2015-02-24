<?php

    header('Cache-Control: no-cache, must-revalidate');
    header('Expires: Mon, 01 Jan 1996 00:00:00 GMT');
    header('Content-type: application/json');

    $entries = array();
    $index = 0;

    if ($handle = opendir('./savedFiles')) {
        while (false !== ($entry = readdir($handle))) {
            if ($entry != "." && $entry != "..") {
                // echo "$entry\n";

                $entries[$index] = $entry;
                $index++;
            }
        }
        closedir($handle);
    }

    echo json_encode($entries);

?>