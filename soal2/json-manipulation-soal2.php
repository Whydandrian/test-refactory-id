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
echo "<bold>1. Find users who doesn't have any phone numbers.</bold><br><br>";
for ($a = 0; $a < count($encoded); $a++) {

  if (count($encoded[$a]['profile']['phones']) < 1) {
    echo 'Data USER ID : ' . $a . '<br>';
    echo '&nbsp;============<br>';

    foreach ($encoded[$a] as $key => $value) {
      echo "&nbsp;&nbsp;&nbsp;&nbsp;$key : $value <br>";

      if (is_array($value) or is_object($value)) {
        foreach ($value as $data => $valuedata) {
          echo "<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $data . " : $valuedata";

          // if (is_array($valuedata) or is_object($valuedata)) {
          //   foreach ($valuedata as $dataSub => $valuedataSub) {
          //     echo "<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $dataSub . " => " . $valuedataSub;
          //   }
          // } else {
          //   continue;
          // }
        }
      } else {
        continue;
      }
      echo '&nbsp;============<br>';
    }
  }
}

echo "<br><br>2. Find users who have articles.<br><br>";

for ($a = 0; $a < count($encoded); $a++) {

  if (count($encoded[$a]['articles']) > 0) {
    echo 'Data USER ID : ' . $a . '<br>';
    echo '&nbsp;============<br>';

    foreach ($encoded[$a] as $keyhasArticles => $valuehasArticles) {
      echo "&nbsp;&nbsp;&nbsp;&nbsp;$keyhasArticles : $valuehasArticles <br>";

      if (is_array($valuehasArticles) or is_object($valuehasArticles)) {
        foreach ($valuehasArticles as $dataArticles => $valuedataArticles) {
          echo "<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $dataArticles . " : $valuedataArticles";

          if (is_array($valuedataArticles) or is_object($valuedataArticles)) {
            foreach ($valuedataArticles as $dataSubArticles => $valuedataSubArticles) {
              echo "<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $dataSubArticles . " => " . $valuedataSubArticles;
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


echo "<br><br><bold>3. Find users who have 'annis' on their name.</bold><br><br>";

for ($a = 0; $a < count($encoded); $a++) {
  $datafullname = ($encoded[$a]['profile']['full_name'] . "<br>");

  echo $datafullname;
}


echo "<br><br><bold>4. Find users who have articles on year 2020.</bold><br><br>";
echo "Yang tidak pernah upload artikel yaitu : ";
for ($a = 0; $a < count($encoded); $a++) {
  $dataarticles = count($encoded[$a]['articles']);
  if ($dataarticles == 0) {
    echo $encoded[$a]['username'] . "<br>";
  }
}


echo "<br><br><bold>5. Find users who are born on 1986.</bold><br><br>";
echo "User yang lahir tahun 1986 yaitu : <br>";
for ($a = 0; $a < count($encoded); $a++) {
  $tgl = $encoded[$a]['profile']['birthday'];
  $iduser = $encoded[$a]['id'];
  $namauser = $encoded[$a]['username'];
  $fullnameuser = $encoded[$a]['profile']['full_name'];
  echo "&nbsp;&nbsp;&nbsp;&nbsp;" . $iduser . "<br>";
  echo "&nbsp;&nbsp;&nbsp;&nbsp;" . $namauser . "<br>";
  echo "&nbsp;&nbsp;&nbsp;&nbsp;" . $fullnameuser . "<br>";
  echo "&nbsp;&nbsp;&nbsp;&nbsp;" . date('d F Y', strtotime($tgl)) . "<br> ===================== <br>";
}

echo "<br><br><bold>6. Find articles that contain 'tips' on the title.</bold><br><br>";
$word = "tips";

for ($a = 0; $a < count($encoded); $a++) {
  $tipsData = $encoded[$a]['articles'];

  foreach ($tipsData as $tipsKey => $valueTips) {

    if (strpos($valueTips, $word) !== false) {
      echo "&nbsp;&nbsp;&nbsp;&nbsp;" . $valueTips . "<br><br><br><br>";
    } else {
      echo "Word Not Found!";
    }
  }
}


echo "<br><br><bold>7. Find articles published before August 2019.</bold><br><br>";
