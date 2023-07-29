<?php
// echo "Masukkan sisi: ";
// $sisi = trim(fgets(STDIN));

// function keliling($keliling) {
//     echo "Keliling: " . $keliling() . "\n";// ada tanda kurung karena $keliling merupakan function atau bisa juga berisi nilai(int) jika terdapat parameter
// }

// echo keliling(fn() => 4 * $sisi);

// Callback function

// function Naruto($cita, callable $jadi_upper):string {//strtoupper callable karena merupakan function bawaan PHP
//     $hasilnya = call_user_func($jadi_upper, $cita);
//     return "Saya akan menjadi " . $hasilnya . "\n";
// }

// $var = "strtoupper";
// if(is_callable($var)){
//     echo Naruto("hokage", $var);
// }
// echo Naruto("hokage", "strtoupper");
// echo Naruto("hokage", fn($name) => strtoupper($name));

// Recursive function
// function pangkat($angka, $pangkat) {
//     if($pangkat == 0) {
//         return 1;
//     }

// }

// function faktorial($angka) {
//     if($angka == 1) {
//         return 1;
//     }
//     else {
//         return $angka * faktorial($angka - 1) . "\n";
//     }
// }

// echo faktorial(8);

// // Static scope

// function inc() {
//     static $i = 0;
//     echo "$i\n";
//     $i++;
// }
// inc();
// inc();
// inc();

// // Require & include => digunakan untuk menggunakan/mengambil file PHP lain
// function sayHai($nama) {
//     echo "Hai $nama\n";
// }

// Konsep MVC(Model, View, Controller)
// Model: data yang akan diolah oleh controller
// View: data yang akan ditampilkan oleh komputer
// Controller: 
