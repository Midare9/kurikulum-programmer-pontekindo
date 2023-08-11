<?php
// Bangun Datar Jajar Genjang
echo "-----Menghitung Luas dan Keliling Jajar Genjang-----" . "\n";
echo "Ketikkan panjang alas jajar genjang:" ;
$a = trim(fgets (STDIN));
echo "Ketikkan tinggi jajar genjang:";
$t = trim(fgets (STDIN));
echo "Ketikkan panjang sisi miring jajar genjang:";
$miring = trim(fgets (STDIN));
$luas = $a * $t;
$keliling = 2*($a+$miring);
echo "Panjang alas: $a" . "\n";
echo "Tinggi: $t" . "\n";
echo "Panjang sisi miring: $miring" . "\n";
echo "Luas: $a * $t = $luas" . "\n";
echo "Keliling: 2*($a+$miring) = $keliling" . "\n";
"\n";

// Bangun Datar Belah Ketupat
echo "-----Menghitung Luas dan Keliling Belah Ketupat-----" . "\n";
echo "Ketikkan panjang diagonal satu belah ketupat:" ;
$d1 = trim(fgets (STDIN));
echo "Ketikkan panjang diagonal dua belah ketupat:";
$d2 = trim(fgets (STDIN));
echo "Ketikkan panjang sisi belah ketupat:";
$sisi = trim(fgets (STDIN));
$luas = 1/2*$d1*$d2;
$keliling = $sisi**4;
echo "Panjang diagonal satu: $d1" . "\n";
echo "Panjang diagonal dua: $d2" . "\n";
echo "Panjang sisi belah ketupat: $sisi" . "\n";
echo "Luas: 1/2*$d1*$d2 = $luas" . "\n";
echo "Keliling: $sisi**4 = $keliling" . "\n";
"\n";
