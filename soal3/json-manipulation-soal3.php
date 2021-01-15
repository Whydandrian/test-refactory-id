<?php
$dataJson = file_get_contents("data.json");
$encoded = json_decode($dataJson, true);

echo "1. Data item pada Meeting Room<br><br>";
for ($a = 0; $a < count($encoded); $a++) {
    if ($encoded[$a]['placement']['name'] == "Meeting Room") {

        echo $encoded[$a]['name'] . "<br>";
        foreach ($encoded[$a]['tags'] as $keyTags => $valueTags) {
            if ($keyTags == 0) {
                echo "&nbsp;&nbsp;Tipe barang : " . $encoded[$a]['type'] . " -> $valueTags <br><br>";
            } else {
                continue;
            }
        }
    }
}
echo "================================= <br>";
echo "2. Find all electronic devices<br><br>";
for ($a = 0; $a < count($encoded); $a++) {
    if ($encoded[$a]['type'] == "electronic") {

        echo $encoded[$a]['name'] . "<br>";
        foreach ($encoded[$a]['tags'] as $keyTags => $valueTags) {
            if ($keyTags == 0) {
                echo "&nbsp;&nbsp;Tipe barang : " . $encoded[$a]['type'] . " -> $valueTags<br><br>";
            } else {
                continue;
            }
        }
    }
}
echo "================================= <br>";
echo "3. Semua data furnitures<br><br>";
for ($a = 0; $a < count($encoded); $a++) {
    if ($encoded[$a]['type'] == "furniture") {

        echo $encoded[$a]['name'] . "<br>";
        foreach ($encoded[$a]['tags'] as $keyTags => $valueTags) {
            if ($keyTags == 0) {
                echo "&nbsp;&nbsp;Tipe barang : " . $encoded[$a]['type'] . " -> $valueTags<br><br>";
            } else {
                continue;
            }
        }
    }
}
echo "================================= <br>";
echo "4. Find all items was purchased at 16 Januari 2020<br><br>";
for ($a = 0; $a < count($encoded); $a++) {

    echo $encoded[$a]['purchased_at'] . "<br>";
    // if ($encoded[$a]['purchased_at'] == "furniture") {

    //     foreach ($encoded[$a]['tags'] as $keyTags => $valueTags) {
    //         if ($keyTags == 0) {
    //             echo "&nbsp;&nbsp;Tipe barang : " . $encoded[$a]['type'] . " -> $valueTags<br><br>";
    //         } else {
    //             continue;
    //         }
    //     }
    // }
}
echo "================================= <br>";
echo "5. Find all items with brown color<br><br>";
for ($a = 0; $a < count($encoded); $a++) {
    if ($encoded[$a]['type'] == "furniture") {

        echo $encoded[$a]['name'] . "<br>";
        foreach ($encoded[$a]['tags'] as $keyTags => $valueTags) {
            if ($keyTags == 0) {
                echo "&nbsp;&nbsp;Tipe barang : " . $encoded[$a]['type'] . " -> $valueTags<br><br>";
            } else {
                continue;
            }
        }
    }
}
