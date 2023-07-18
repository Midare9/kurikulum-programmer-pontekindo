<?php
do {
    echo "---MENU---\n";
    echo "1. Masuk Apk\n";
    echo "2. Keluar\n";
    echo "Pilih: ";
    $menu = (int) trim(fgets(STDIN));
    if ($menu == 1) {
        echo "Masuk Apk\n";
    }
    else if ($menu == 2) {
        echo "Anda telah keluar\n";
        exit;
    }
    else {
        echo "Pilihan tidak tersedia\n";
    }
    echo " Balik ke menu (Y/N): ";
    $balik = trim(fgets(STDIN));
}
while ($balik == "Y");

// $array1 = ["Danu", "Dimas", "Faqih", "Hanif", "Hafidz", "Syifa", "Fandy"];
// var_dump(count($array1));
// $no = 1;
// for ($i = 0; $i < count($array1); $i++) {
//     echo "$no. ". $array1[$i]. "\n";
//     $no++;
// }

// $no = 1;
// foreach ($array1 as $key => $value) {
//     echo "$no. $key\n";
//     foreach ($value as key1 => $value1) {;
//         echo "$key1: ". $value1. "\n";
//     }
//     $no++;
// }