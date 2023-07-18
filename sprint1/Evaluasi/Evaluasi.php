<?php
// != -> menampilkan true apabila nilai dari variabel tidak sama
// !== -> menampilkan true apabila nilai dan tipe dari variabel tidak sama
// Contoh
$tsama = 1;
$tsama2 = "1";
var_dump($tsama != $tsama2); // Akan tampil false karena nilai sama
echo "\n";

$tidentik = "1";
$tidentik2 = "1";
var_dump($tidentik !== $tidentik2); // Akan tampil false karena nilai sama
echo "\n";

// Variabel -> wadah tempat menyimpan sebuah nilai yang dapat berubah-ubah
// Konstanta -> juga merupakan wadah sebuah nilai hanya saja tidak dapat berubah-ubah/bersifat tetap
// Contoh
$x = "Hello";
$x = "World";
echo $x . "\n";

define("UMUR", "17");
define("UMUR", "15");
echo UMUR;
echo "\n";

// $array = array(
//     "Danu" => [
//         "umur" => 17,
//         "alamat" => [
//             "provinsi" => "Jambi",
//             "negara" => "Indonesia"
//         ]
//         ],
//     "Faqih" => [
//         "umur" => 17,
//         "alamat" => [
//             "provinsi" => "Sumsel",
//             "negara" => "Jepang"
//         ]
//     ]
//     "Syifa" => [
//         "umur" => 22,
//         "alamat" => [
//             "daerah" => "solo",
//             "negara" => "Jepang"
//         ]
//     ]
//     "Faqih" => [
//         "umur" => 17,
//         "alamat" => [
//             "provinsi" => "Sumsel",
//             "negara" => "Jepang"
//         ]
//     ]
//     "Faqih" => [
//         "umur" => 17,
//         "alamat" => [
//             "provinsi" => "Sumsel",
//             "negara" => "Jepang"
//         ]
//     ]
//     "Faqih" => [
//         "umur" => 17,
//         "alamat" => [
//             "provinsi" => "Sumsel",
//             "negara" => "Jepang"
//         ]
//     ]
//         );
// echo $array["Faqih"]["alamat"]["provinsi"];
// echo "\n";

// Uang Budi saat ini
$ubudi = 5000;
$ubudi -= 2000;
$ubudi += 5000;
echo "$ubudi\n";

// Operator aritmatika pangkat
$a = 7;
$b = 3;
// a pangkat b
$pangkat = $a ** $b;
echo "$pangkat\n";

// Switch
$berat = 33;
switch($berat) {
    case $berat <= 10:
        echo "ringan\n";
        break;
    case $berat <= 20:
        echo "agak ringan\n";
        break;
    case $berat <= 30:
        echo "berat\n";
        break;
    default:
        echo "Sangat berat\n";
        break;
}

$array = [
    "Danu" => [
        "Nama" => "Danu",
        "Umur" => "17",
        "TTL" => "Jambi, 09 Oktober 2005"
    ],
    "Dimas" => [
        "Nama" => "Dimas",
        "Umur" => ""
    ]
]

// Soal 6

$budi = "Budi";
$akhlakbaik = true;
$goodlooking = false;
$goodrekening = false;

if ($akhlakbaik == true && ($goodlooking == true || $goodrekening == true)) {
    $ayu = "Ayu: Saya terima\n";
}
else {
    $ayu = "Ayu: Saya tidak terima\n";
}

echo "Budi melamar Ayu, dia memiliki akhlak yang baik namun tidak good looking maupun good rekening. Maka jawaban Ayu: $ayu\n";