<?php
// function tigatertinggi(...$daftar) {
//     rsort($daftar);
//     foreach($daftar as $key => $value) {
//         if($key < 3) {
//             echo $value . "\n";
//         }
//     }
// }
// tigatertinggi(216, 769, 255, 512, 363, 121);

// $alas = 12;
// $tinggi = 20;
// function luassegitiga($formula) {
//     echo "Luasnya: ". $formula();
// }
// luassegitiga(fn() => $alas * $tinggi / 2);

function ubahdata(...$data) {
    sort($data);
    echo implode("|", $data);
}
ubahdata("Vario", "Supra", "Revo", "Vixion", "Mio", "Beat");

// echo "jumlah penduduk desa Amegakure: ";
// $penduduk = trim(fgets(STDIN));
// $klasifikasi = function($jumlah) {
//     if($jumlah < 100) {
//         return "sedikit penduduk";
//     }
//     elseif($jumlah < 200) {
//         return "cukup penduduk";
//     }
//     else {
//         return "padat penduduk";
//     }
// };
// echo $klasifikasi($penduduk);

// Variabel scope
// Global => variabel yang diletakkan di luar function dan dapat diakses dengan kata kunci 'global'
// $a = 1;
// function global() {
//     global $a;
// }
// Lokal => variabel yang berada di dalam sebuah function dan hanya bisa digunakan oleh function tersebut
// function lokal() {
//     $b = 2;
// }
// Static => variabel dalam fungsi yang bersifat tetap sehingga tidak akan terhapus setelah fungsi dideklarasikan
// function statis() {
//     static $c = 3;
//     echo $c;
// }

// statis();
// statis();

// require_once "nilaisantri.php";
// $nilaisantri = [90, 85, 94, 77, 62, 88];
// nilaisantri($nilaisantri);

// $rata_rata = array_sum($nilaisantri)/count($nilaisantri);
// echo $rata_rata. "\n";