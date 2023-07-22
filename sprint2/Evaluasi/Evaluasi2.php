<?php
// Soal 1
echo "Masukkan nama produk elektronik: ";
$nproduk = trim(strtoupper(fgets(STDIN)));
echo "$nproduk\n";
echo "Masukkan deskripsi produk (max 4 karakter): ";
$desproduk = trim(fgets(STDIN));
$jumlahdes = str_word_count($desproduk);
if($desproduk > 4) {
    echo "Deskripsi terlalu panjang\n";
}
else {
    echo "$desproduk\n";
}
echo "Masukkan kode produksi: ";
$kodeproduk = trim(fgets(STDIN));
$jumlahkode = str_word_count($kodeproduk);
if(is_numeric($kodeproduk) || $jumlahkode > 80) {
    echo "Input tidak valid\n";
}
else {
    echo "$kodeproduk\n";
}

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

// $string = "Aqidah & Fiqih & Hadits & Tafsir & Tajwid & Adab";
// $array = explode("&", $string);
// foreach($array as $value) {
//     echo $value . "\n";
// }

// $array = [-2, 4, -18, 9, 0, 21, -5];
// Urutan dari yang terbesar
// sort($array);
// foreach($array as $value) {
//     echo $value . "\n";
// }
// Urutan yang bernilai negatif
// sort($array);
// foreach($array as $value) {
//     if($value < 0) {
//         echo $value . "\n";
//     }
// }
// Urutan yang bernilai positif
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
// $data["nomor telepon"] = "08123";

// Soal 6
// unset($data["password_confirmation"]);

// Soal 7
// $data["username"] = "Duine Eigin";

// foreach($data as $key => $value) {
//     echo "$key: " . $value . "\n";
// }