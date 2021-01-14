<?php
setlocale(LC_ALL, 'id-ID', 'id_ID');


$dataJson = file_get_contents("artikel.json");

if ($encoded = json_decode($dataJson, true)) {

  foreach ($encoded as $key => $value) {

    foreach ($value as $bKey => $bValue) {

      if (!(is_array($bValue))) {
        echo "<br>&nbsp;&nbsp;&nbsp;&nbsp;" . $bKey . " : " . $bValue;
      } else {
        if (is_array($bValue)) {
          foreach ($bValue as $data => $valuedata) {
            echo "<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $data;

            if (is_array($valuedata) or is_object($valuedata)) {
              foreach ($valuedata as $dataSub => $valuedataSub) {
                echo "<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $dataSub . " => " . $valuedataSub;
              }
            } else {
              continue;
            }
          }
        } else {
          continue;
        }
      }
    }
  }
} else {
  echo 'error on syntax';
}
