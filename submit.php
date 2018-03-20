<?php

$file = $_POST['file'];
$csv = file($file);
$condensed_array = array();

$data = [];
foreach ($csv as $line) {

    $new_line = str_getcsv($line);
    $key = $new_line[0];
    $cost = $new_line[1] * $new_line[2];

    if(array_key_exists($key, $data)) {
      $data[$key] += $cost;
    } else {
      $data[$key] = $cost;
    }
}

include("index.php");
