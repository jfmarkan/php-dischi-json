<?php
    $getDiscs = file_get_contents('./database/dischi.json');

    $discs = json_decode($getDiscs);

    header('Content-Type: application/json');
    echo ($getDiscs);
?>