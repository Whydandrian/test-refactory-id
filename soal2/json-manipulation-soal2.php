<?php
$dataJson = file_get_contents("artikel.json");
$encoded = json_decode($dataJson, true);

// if ($encoded = json_decode($dataJson, true)) {

//   foreach ($encoded as $key => $value) {

//     foreach ($value as $bKey => $bValue) {

//       if (!(is_array($bValue))) {
//         echo "<br>&nbsp;&nbsp;&nbsp;&nbsp;" . $bKey . " : " . $bValue;
//       } else {
//         if (is_array($bValue) or is_object($valuedata)) {
//           foreach ($bValue as $data => $valuedata) {
//             echo "<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $data . " : ";

//             if (is_array($valuedata) or is_object($valuedata)) {
//               foreach ($valuedata as $dataSub => $valuedataSub) {
//                 echo "<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $dataSub . " => " . $valuedataSub;
//               }
//             } else {
//               continue;
//             }
//           }
//         } else {
//           continue;
//         }
//       }
//     }
//   }
// } else {
//   echo 'error on syntax';
// }
echo "1. Find users who doesn't have any phone numbers.<br><br>";
for ($a = 0; $a < count($encoded); $a++) {
  foreach ($encoded[$a]['profile']['phones'] as $key => $value) {
    echo "$key : $value<br>";
  }
}


// foreach ($encoded[0]['profile']['phones'] as $key => $value) {
//   echo $value . "<br>";
// }
