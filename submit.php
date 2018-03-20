<?php

include('csv.php');

$file = $_POST['file'];
$csv = file($file);
$condensed_array = array();

$data = [];

$newCsv = new Csv($csv);
$data['table'] = $newCsv->data;

include("index.php");
