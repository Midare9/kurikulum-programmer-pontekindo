<?php
// // Array Numerik -> indexnya berupa angka yang dimana dimulai dari angka 0

// $array = ["string",321,true,null,-12.3];
// // var_dump($array);
// echo $array[0];
// echo "\n";

// // Array associative -> indexnya bisa kita atur sendiri
// // Array associative == 
// $arrayAssoc = array(
//     "pertama" => "awaludin",
//     "kedua" => "akhirudin"
// );

// var_dump($arrayAssoc);
// echo $arrayAssoc["pertama"];
// echo "\n";
// // Array di dalam Array
// $danu = array(
//     "id" => "danu",
//     "name" => "Danu Darajati",
//     "age" => 17,
//     "address" => [
//         "daerah" => [
//             "Danau Sipin",
//             "Talang Banjar"
//         ],
//         "city" => "Jambi",
//         "country" => "Indonesia",
//     ]
//     );
//     echo $danu["address"]["daerah"][1];
// echo "\n";

// // Manupulasi Array
// echo $array[0];
// echo "\n";
// $array[0] = "newstring";
// echo $array[0];
// echo "\n";

// // Operator Aritmatika
// // Operan -> yang dioperasikan
// $num1 = 12;
// $num2 = 4;

// // Penjumlahan
// echo $num1 + $num2;
// echo "\n";

// // Pengurangan
// echo $num1 - $num2;
// echo "\n";

// // Perkalian
// echo $num1 * $num2;
// echo "\n";

// // Pembagian
// echo $num1 / $num2;
// echo "\n";

// // Pangkat
// echo $num1 ** $num2;
// echo "\n";

// // Modulus atau sisa hasil bagi
// echo $num1 % $num2;
// echo "\n";

// // Operator Penugasan
// // Ditambah -> +=
// $angka1 = 2;
// $angka2 = 4;

// $angka1 += 17;
// echo $angka1;
// echo "\n";

// // Dikurang -> -=
// // Dikali -> *=
// // Dibagi -> /=
// // Pangkat
// // Modulus

// // Ambil input lewat cli/terminal
// // trim adalah fungsi bawaan php untuk menghapus spasi pada awal dan akir data
// $misal = " danu \n";
// echo trim($misal);
// echo "\n";
// fgets adalah fungsi untuk mengambil inputan dari cli/terminal
// STDIN adalah standar input -> tempat untuk menyimpan data sebelum ditampilkan
// echo " Menghitung Luas Persegi " . "\n";
// echo "Ketikkan sisi persegi :";
// $sisi = trim(fgets (STDIN));
// $luas = $sisi * $sisi;
// $keliling = 4 * $sisi;
// echo "Sisi: $sisi" . "\n";
// echo "Luas: $sisi * $sisi = $luas" . "\n";
// echo "Keliling: 4 * $sisi = $keliling" . "\n";

echo "Menghitung Luas Persegi Panjang\n";
echo "Ketikkan nilai panjang: ";
$p = trim(fgets(STDIN));
echo "Ketikkan nilai lebar: ";
$l = trim(fgets(STDIN));
$luas = $p * $l;
echo "Panjang: $p" . "\n";
echo "Lebar: $l\n";
echo "Luas: $p * $l = $luas\n";