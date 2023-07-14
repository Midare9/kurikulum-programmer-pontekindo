<?php
// Bangun Datar Belah Ketupat
echo "-----Menghitung Luas dan Keliling Layang-layang-----" . "\n";
echo "Ketikkan panjang diagonal satu layang-layang:" ;
$d1 = trim(fgets (STDIN));
echo "Ketikkan panjang diagonal dua layang-layang:";
$d2 = trim(fgets (STDIN));
echo "Ketikkan panjang sisi yang sama panjang a:";
$sisia = trim(fgets (STDIN));
echo "Ketikkan panjang sisi yang sama panjang b:";
$sisib = trim(fgets (STDIN));
$luas = 1/2*$d1*$d2;
$keliling = 2*($sisia+$sisib);
echo "Panjang diagonal satu: $d1" . "\n";
echo "Panjang diagonal dua: $d2" . "\n";
echo "Panjang sisi yang sama panjang a: $sisia" . "\n";
echo "Panjang sisi yang sama panjang b: $sisib" . "\n";
echo "Luas: 1/2*$d1*$d2 = $luas" . "\n";
echo "Keliling: 2*($sisia+$sisib) = $keliling" . "\n";
"\n";

// Bangun Datar Trapesium
echo "-----Menghitung Luas dan Keliling Trapesium-----" . "\n";
echo "Ketikkan panjang sisi sejajar a:" ;
$sejajara = trim(fgets (STDIN));
echo "Ketikkan panjang sisi sejajar b:";
$sejajarb = trim(fgets (STDIN));
echo "Ketikkan tinggi trapesium:";
$t = trim(fgets (STDIN));
echo "Ketikkan panjang sisi miring:";
$miring = trim(fgets (STDIN));
$luas = 1/2*($sejajara+$sejajarb)*$t;
$keliling = (2*$miring)+$sejajara+$sejajarb;
echo "Panjang diagonal satu: $d1" . "\n";
echo "Panjang diagonal dua: $d2" . "\n";
echo "Panjang sisi yang sama panjang a: $sisia" . "\n";
echo "Panjang sisi yang sama panjang b: $sisib" . "\n";
echo "Luas: 1/2*($sejajara+$sejajarb)*$t = $luas" . "\n";
echo "Keliling: (2*$miring)+$sejajara+$sejajarb = $keliling" . "\n";
"\n";
