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

  if (count($encoded[$a]['profile']['phones']) < 1) {
    echo 'Data USER ID : ' . $a . '<br>';
    echo '&nbsp;============<br>';

    foreach ($encoded[$a] as $key => $value) {
      echo "&nbsp;&nbsp;&nbsp;&nbsp;$key :<br>";

      if (is_array($value) or is_object($value)) {
        foreach ($value as $data => $valuedata) {
          echo "<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $data . " : ";

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
      echo '&nbsp;============<br>';
    }
  }
}

echo "<br><br>2. Find users who have articles.<br><br>";
echo "<br><br>3. Find users who have 'annis' on their name.<br><br>";
echo "<br><br>4. Find users who have articles on year 2020.<br><br>";
echo "<br><br>5. Find users who are born on 1986.<br><br>";
