<?php

// Menghitung jumlah karakater
// function jumlah_karakter($string, $closure) {
//     echo "Jumlah karakter: " . $closure($string) . "\n";
// }

// echo "String yang ingin dihitung: ";
// $input = trim(fgets(STDIN));

// jumlah_karakter($input, function($kalimat) {return strlen($kalimat);});

// Program pemisah angka ganjil dan genap
function pemisah(...$angka) {
    echo "Angka genap: ";
    foreach($angka as $valuegenap) {
        if($valuegenap % 2 == 0) {
            echo "$valuegenap, ";
        }
    }
    echo "Angka ganjil: ";
    foreach($angka as $valueganjil) {
        if($valueganjil % 2 == 1) {
            echo "$valueganjil, ";
        }
    }
}

pemisah(1,2,3,4,5,6);

// versi mas Fandy
// echo "Masukkan Data: ";
// $input = trim(fgets(STDIN));
// $hitungkarakter = function() use($input) {
//     echo "Jumlah karakter: " . strlen($input);
// }