<?php
echo "-----Menghitung Total Belanja------\n";
echo "Masukkan Nama Konsumen: ";
$nama = trim(fgets(STDIN));
echo "Masukkan Barang Pertama: ";
$barang1 = trim(fgets(STDIN));
echo "Masukkan Harga Barang Pertama: ";
$harga1 = trim(fgets(STDIN));
echo "Masukkan Barang Kedua: ";
$barang2 = trim(fgets(STDIN));
echo "Masukkan Harga Barang Kedua: ";
$harga2 = trim(fgets(STDIN));
echo "Masukkan Barang Ketiga: ";
$barang3 = trim(fgets(STDIN));
echo "Masukkan Harga Barang Ketiga: ";
$harga3 = trim(fgets(STDIN));
// $diskon = 1000;
$harga1+=$harga2;
$harga1+=$harga3;
$total = $harga1;
// if($harga1 >= 5000) {
//     $hsd1 = $harga1 - 10% * $harga1;
//     echo "\n";
// }
// else if($harga2 >= 5000){
//     $hsd2 = $harga2 - 10% * $harga2;
//     echo "\n";
// }
// else if($harga3 >= 5000){
//     $hsd3 = $harga3 - 10% * $harga3;
//     echo "\n";
// }
// else {
//     echo "\n";
// }
// switch($nilai) {
//     case $nilai >= 100:
//         echo "Perfect\n";
//         break;
//     case $nilai >= 80:
//         echo "Excellent\n";
//         break;
//     default:
//         echo "Not Passed";
//         break;
// }
echo "Nama Santri: $nama\n";
echo "Total: $total";
