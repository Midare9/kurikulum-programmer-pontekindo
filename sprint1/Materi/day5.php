<?php
// Pengkondisian
// Ternary
// echo "Nilai: ";
// $nilai = trim(fgets(STDIN));
// $result = $nilai >= 100 ? "Perfect" : ($nilai >= 80 ? "Excellent" : ($nilai >= 70 ? "Good" : "Not Passed"));
// echo $result . "\n";

// echo "Masukkan warna buah: ";
// $warna = trim(fgets(STDIN));
// $result = $warna == "merah" ? "Apel" : ($warna == "hijau" ? "Apel Hijau" : "Bukan Buah");
// echo $result . "\n";

// NULL Coalescing Operator -> akan memeriksa ada tidaknya nilai suatu variable

// For Loop
// $i = 1;
// for (; $i < 10;) {
//     echo "Hello\n";
//     $i++;
// }

// for ($i = 1; $i < 10; $i++) {
//     echo "Hello\n";
// }

// for ($i = 1; $i <= 10; $i++) {
//     if ($i == 5) {
//         echo "merah\n";
//     }
//     else if ($i == 10) {
//         echo "hijau\n";
//     }
//     else {
//         echo $i . "\n";
//     }
// }

// While Loop
// $i = 1;
// while ($i<10) {
//     echo "Hello\n";
//     $i++;
// }

// Do While -> akan tetap menjalankan perulangan minimal satu kali meskipun bernilai false
// $i = 11;
// do {
//     echo "Hello\n";
//     $i++;
// }
// while ($i<=10);

// Break & Continue
// Continue akan melewati atau skip sebuah pengkondisian
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        continue;
    }
    else if ($i == 10) {
        echo "hijau\n";
    }
    else {
        echo $i . "\n";
    }
}

// do
//     echo "---MENU---";
//     echo "1. Masuk Apk\n";
//     echo "2. Keluar\n";
//     echo "Pilih: ";
//     $menu = (int) trim(fgets(STDIN));
//     if ($menu == 1) {
//         echo "Masuk Apk\n";
//     }
//     else if ($menu == 2) {
//         echo "Anda telah keluar\n";
//         exit;
//     }
//     else {
//         echo "Pilihan tidak tersedia\n";
//     }
//     echo " Balik ke menu (Y/N): ";
//     $balik = trim(fgets(STDIN));
// while ($balik == "Y");