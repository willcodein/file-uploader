<?php

include('csv.php');
$data = [];

// Get file from post request
$file = $_POST['file'];
$csv = file($file);

// Create new instance of CSV object
$csvInstance = new Csv($csv);

// Pass data to view
$data['table'] = $csvInstance->data;
include("index.php");
