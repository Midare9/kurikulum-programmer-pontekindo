<?php
// Soal 1
// echo "Masukkan nama produk elektronik: ";
// $nproduk = trim(strtoupper(fgets(STDIN)));
// echo "$nproduk\n";
// echo "Masukkan deskripsi produk (max 4 karakter): ";
// $desproduk = trim(fgets(STDIN));
// $jumlahdes = strlen($desproduk);
// if($jumlahdes > 4) {
//     echo "Deskripsi terlalu panjang\n";
// }
// else {
//     echo "$desproduk\n";
// }
// echo "Masukkan kode produksi: ";
// $kodeproduk = trim(fgets(STDIN));
// $jumlahkode = str_word_count($kodeproduk);
// if(is_numeric($kodeproduk) || $jumlahkode > 80) {
//     echo "Input tidak valid\n";
// }
// else {
//     echo "$kodeproduk\n";
// }
// if(strlen($kodeproduk) > 8 || !is_numeric($kodeproduk)) {
//     echo "Input invalid!\n";
// }
// else {
//     echo "$kodeproduk\n";
// }

// echo "Masukkan kode item: ";
// $charitem = trim(strtoupper(fgets(STDIN)));
// if(substr($charitem,1,2) < 50) {
//     echo "Barang rare\n";
// }
// elseif(substr($charitem,1,2) > 50) {
//     echo "Barang super rare\n";
// }
// elseif(substr($charitem,1,2) > 50) {
//     echo "Barang super rare\n";
// }
echo "Masukkan kode item: ";
$charitem = trim(strtoupper(fgets(STDIN)));
$kode2 = substr($charitem,0,2);
$kode1 = substr($charitem,0,1);
$kode12 = substr($charitem,1,1);
if(is_numeric($kode2) && $charitem < 50) {
    echo "Item Rare\n";
}
elseif(is_numeric($kode2) && $charitem > 50) {
    echo "Item Super Rare\n";
}
elseif($kode1 == "A" || $kode1 == "B" || $kode1 == "C") {
    echo "Item Unique\n";
}
elseif($kode1 == "D" || $kode1 == "E" || $kode1 == "F") {
    echo "Item Legendary\n";
}
elseif(is_numeric($kode1) && is_string($kode12) || is_string($kode1) && is_numeric($kode12)) {
    echo "Item Ultra Rare\n";
}
else {
    echo "Item Common\n";
}

// $string = "Aqidah & Fiqih & Hadits & Tafsir & Tajwid & Adab";
// $array = explode("&", $string);
// foreach($array as $value) {
//     echo $value . "\n";
// }

// $array = [-2, 4, -18, 9, 0, 21, -5];
// Urutan dari yang terbesar
// rsort($array); // singkatan dari reverse sort
// foreach($array as $value) {
//     echo $value . "\n";
// }
// Urutan yang bernilai negatif // Bilangan negatif adalah bilangan yang nilainya lebih kecil dari nol
// sort($array);
// foreach($array as $value) {
//     if($value < 0) {
//         echo $value . "\n";
//     }
// }
// Urutan yang bernilai positif // Bilangan positif adalah bilangan yang nilainya lebih besar dari nol
// sort($array);
// foreach($array as $value) {
//     if($value > 0) {
//         echo $value . "\n";
//     }
// }

$data = [
   "id" => 582,
   "username" => "Fulan",
   "email" => "fulan@gmail.com",
   "password" => "123fulan321",
   "password_confirmation" => "123fulan321",
];

// Soal 5
// $data["nomor_telepon"] = "08123";

// Soal 6
// unset($data["password_confirmation"]);

// Soal 7
// $data["username"] = "Duine Eigin";

// foreach($data as $key => $value) {
//     echo "$key: " . $value . "\n";
// }