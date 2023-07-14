<?php
// Expression: nilai/value
// Statement: kalimat kode hingga akhir/titik koma
// Block: kode yang berada di dalam

// Percabangan (conditional statement)=> if else
// echo "-----Mendata Nilai Santri------\n";
// echo "Masukkan Nama Santri: ";
// $nama = trim(fgets(STDIN));
// echo "Masukkan Nilai Santri: ";
// $nilai = trim(fgets(STDIN));
// echo "Nama Santri: $nama\n";
// echo "Nilai Santri: $nilai dengan predikat";
// $nilai = 100;
// if($nilai == 100) {
//     echo "Perfect";
//     echo "\n";
// }
// else if($nilai >= 80){
//     echo "Excellent";
//     echo "\n";
// }
// else if($nilai >= 60){
//     echo "Good";
//     echo "\n";
// }
// else {
//     echo "Not Passed";
//     echo "\n";
// }

// echo "-----Menetukan Bonus Belanja Konsumen------\n";
// echo "1. Input Nama Konsumen\n";
// echo "2. Keluar\n";
// echo "Pilih Menu: ";
// $menu = trim(fgets(STDIN));
// if($menu == 1) {
//     echo "Masukkan Nama Konsumen: ";
//     $nama = trim(fgets(STDIN));
//     echo "Masukkan Total Belanja: ";
//     $total = trim(fgets(STDIN));
//     echo "Nama Konsumen: $nama\n";
//     echo "Bonus Yang Didapat: Selamat!, dari total belanja anda sebesar $total, anda berhak mendapatkan ";
//     if($total >= 10000000) {
//         echo "Sepeda Motor";
//         echo "\n";
//     }
//     else if($total >= 8000000){
//         echo "TV LED";
//         echo "\n";
//     }
//     else if($total >= 6000000){
//         echo "Mesin Cuci";
//         echo "\n";
//     }
//     else {
//         echo "'Maaf, total belanja anda belum memenuhi minimum";
//         echo "\n";
//     }
// }
// else if($menu == 2) {
//     echo "Keluar\n";
//     exit;
// }
// else {
//     echo "Input Invalid\n";
// }

// Switch -> mirip seperti if else namun sintaks lebih simple
$nilai = 60;
switch($nilai) {
    case $nilai >= 100:
        echo "Perfect\n";
        break;
    case $nilai >= 80:
        echo "Excellent\n";
        break;
    default:
        echo "Not Passed";
        break;
}

echo "-----Menentukan Denda Sewa Buku-----\n";
echo "Masukkan Nama Konsumen: ";
$nama = trim(fgets(STDIN));
echo "Masukkan Judul Buku: ";
$judul = trim(fgets(STDIN));
echo "Masukkan Lama Keterlambatan (hari): ";
$lama = trim(fgets(STDIN));
echo "Nama Konsumen: $nama\n";
echo "Judul Buku: $judul\n";
echo "Lama Keterlambatan: $lama (hari)\n";
echo "Denda:  ";
switch($lama) {
    case $lama == 1:
        echo "1000\n";
        break;
    case $lama == 2:
        echo "20000\n";
        break;
    case $lama == 3:
        echo "30000\n";
        break;
    case $lama == 4:
        echo "40000\n";
        break;
    case $lama == 5:
        echo "50000\n";
        break;
    case $lama == 6:
        echo "60000\n";
        break;
    case $lama == :
        echo "20000\n";
        break;
    case $lama == 2:
        echo "20000\n";
        break;
        default:
        echo "Tidak Ada Denda";
        break;
}