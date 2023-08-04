<?php
function tigatertinggi(...$daftar) {
    rsort($daftar);
    $no = 1;
    foreach($daftar as $key => $value) {
        if($key < 3) {
            echo "$no. ". $value . "\n";
        }
        $no++;
    }
}
// tigatertinggi(216, 769, 255, 512, 363, 121);

// $alas = 12;
// $tinggi = 20;
// function luassegitiga($formula) {
//     echo "Luasnya: ". $formula();
// }
// luassegitiga(fn() => $alas * $tinggi / 2);

// function luassegitiga($arrowfunc) {
//     echo "Luas: ". $arrowfunc(20,12);
// }
// luassegitiga(fn($tinggi, $alas) => 1/2 * $alas * $tinggi);

// function ubahdata($urut, $filter, ...$data) {
//     $urut($data);
//     echo $filter(" | ", ($data));
// }
// $imp = "implode";// membuat variabel function dengan fungsi bawaan PHP dalam bentuk string
// ubahdata("sort", $imp, "Vario", "Supra", "Revo", "Vixion", "Mio", "Beat");

// echo "jumlah penduduk desa Amegakure: ";
// $penduduk = trim(fgets(STDIN));

$klasifikasi = function() {
    global $penduduk;// atau juga bisa menggunakan function use pada baris di atas setelah parameter
    if($penduduk >= 200) {
        return "padat penduduk";
    }
    else if($penduduk >= 100) {
        return "cukup penduduk";
    }
    else {
        return "sedikit penduduk";
    }
};
// echo "Keterangan: ";
// echo $klasifikasi(). "\n";

// Variabel scope
// Global => variabel yang diletakkan di luar function dan dapat diakses dengan kata kunci 'global' tidak bisa langsung digunakan oleh function
// $a = 1;
// function global() {
//     global $a;
// }
// global();
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

// function tampil() {
//     static $g = "local";
//     echo $g. "\n";
//     $g = "tampil";
// }
// tampil();
// tampil();

require_once "nilaisantri.php";
$nilaisantri = [90, 85, 94, 77, 62, 88];
nilaisantri($nilaisantri);

$rata_rata = array_sum($nilaisantri)/count($nilaisantri);
echo $rata_rata. "\n";