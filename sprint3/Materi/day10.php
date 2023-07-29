<?php
// variabel function
// function sum($a, $b) {
//     $t = $a + $b;
//     return $t;
// }
// $penjumlahan = sum(55, 45);
// echo $penjumlahan;

// function memanggil nama dan divisi dengan parameter default value
// function daftar($nama, $divisi = "Programmer") {
//     return "Halo nama saya $nama, dari divisi $divisi\n";
// }

// $greetings = daftar("Duine Eigin", "Multimedia");
// echo $greetings;

// function nama_hewan(...$hewan) {
//     return $daftar = $hewan;
// }

// $daftar = "nama_hewan";
// echo implode(", ", $daftar("Ikan", "Ayam", "Sapi")) . "\n";

// anonymous function/closure
// $buah = function($fruit) {
//     return "Buah: $fruit";
// };

// echo $buah("Apel");
// dan function ini juga dapat dijadikan argumen

// menhitung jumlah kata dalam sebuah string
function jumlah_kata($string, $closure) {
    echo "Jumlah kata: " . $closure($string) . "\n"; // $string merupakan argumen untuk function anonymous($kalimat)
}

jumlah_kata("Aku seorang kapiten. Mempunyai pedang panjang", function($kalimat) {return str_word_count($kalimat);});
// mengggunakan use => hanya bisa pada closure
$buah = "Melon";
$tampil_buah = function($tunjuk) use ($buah) {
    echo "$tunjuk $buah\n";
};
$tampil_buah("Itu");
// atau menggunakan global => diletakkan di dalam blok kode
$buah = "Melon";
$tampil_buah = function($tunjuk) {
    global $buah;
    echo "$tunjuk $buah\n";
};
$tampil_buah("Itu");
