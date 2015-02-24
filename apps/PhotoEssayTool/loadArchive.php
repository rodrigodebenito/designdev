<?php

    // header('Cache-Control: no-cache, must-revalidate');
    // header('Expires: Mon, 01 Jan 1996 00:00:00 GMT');
    // header('Content-type: application/json');

    $name = $_GET["name"];

    // if ($handle = opendir('./savedFiles/' . $name)) {
    //     while (false !== ($entry = readdir($handle))) {
    //         if ($entry != "." && $entry != "..") {
    //             // echo "$entry\n";

    //             $entries[$index] = $entry;
    //             $index++;
    //         }
    //     }
    //     closedir($handle);
    // }

    echo readfile('./savedFiles/' . $name);

?>