<?php
// Bangun Datar Persegi
echo "-----Menghitung Luas dan Keliling Persegi Panjang-----" . "\n";
echo "Ketikkan panjang persegi panjang:" ;
$panjang = trim(fgets (STDIN));
echo "Ketikkan lebar persegi panjang:";
$lebar = trim(fgets (STDIN));
$luas = $panjang * $lebar;
$keliling = (2*$panjang)+(2*$lebar);
echo "Panjang: $panjang" . "\n";
echo "Lebar: $lebar" . "\n";
echo "Luas: $panjang * $lebar = $luas" . "\n";
echo "Keliling: (2*$panjang)+(2*$lebar) = $keliling" . "\n";
"\n";

// Bangun Datar Segitiga
echo "-----Menghitung Luas dan Keliling Segitiga-----" . "\n";
echo "Ketikkan panjang alas segitiga:" ;
$alas = trim(fgets (STDIN));
echo "Ketikkan tinggi segitiga:";
$tinggi = trim(fgets (STDIN));
echo "Ketikkan panjang sisi a segitiga:";
$a = trim(fgets (STDIN));
echo "Ketikkan panjang sisi b segitiga:";
$b = trim(fgets (STDIN));
echo "Ketikkan panjang sisi c segitiga:";
$c = trim(fgets (STDIN));
$luas = ($alas*$tinggi)/2;
$keliling = $a+$b+$c;
echo "Alas: $alas" . "\n";
echo "Tinggi: $tinggi" . "\n";
echo "Luas: ($alas*$tinggi)/2 = $luas" . "\n";
echo "Keliling: $a+$b+$c = $keliling" . "\n";
"\n";

// Bangun Datar Lingkaran
echo "-----Menghitung Luas dan Keliling Lingkaran-----" . "\n";
echo "Ketikkan panjang jari-jari lingkaran:" ;
$r = trim(fgets (STDIN));
echo "Ketikkan panjang diameter lingkaran:";
$d = trim(fgets (STDIN));
$luas = 3.14*($r**2);
$keliling = 3.14*$d;
echo "Jari-jari: $r" . "\n";
echo "Diameter: $d" . "\n";
echo "π (pi): 3.14" . "\n";
echo "Luas: π*$r**2 = $luas" . "\n";
echo "Keliling: π*$d = $keliling" . "\n";
