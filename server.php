<?php
$file_discs = file_get_contents('./dischi.json');
$discs = json_decode($file_discs, true);
header('Content-type: application/json');
echo json_encode($discs);
