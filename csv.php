<?php

/**
*
* Convert an array to an csv object
*
* @param    array   $csv The array to convert to data and csv file
* @return   object  the csv object
*
*/

class Csv {
  private $data = [];
  private $csv;

  function __construct($csv) {
    $this->csv = $this->prepareData($csv);
  }

  public function __get($property) {
    if (property_exists($this, $property)) {
      return $this->$property;
    }
  }

  public function getData() {
    return $this->$data;
  }

  private function prepareData($csv) {
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
    $this->data = $data;
    $this->prepareCsv();
  }

  private function prepareCsv() {
    $file = fopen("new_data.csv","w");
    foreach ($this->data as $key => $line) {
      $newLine = $key . ',' . $line;
      fputcsv($file, explode(',', $newLine));
    }
    fclose($file);
  }

}
