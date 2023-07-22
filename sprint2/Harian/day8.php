<?php
// balik:
// echo "Masukkan nama produk: ";
// $produk = ucwords(strtolower(trim(fgets(STDIN))));
// echo "Masukkan deskripsi produk: ";
// $desc = ucwords(strtolower(trim(fgets(STDIN))));
// harga:
// echo "Masukkan harga produk: ";
// $harga = trim(fgets(STDIN));

// if (is_numeric($produk) || is_numeric($desc)) {
//     echo "Masukkan input yang benar\n";
//     goto balik;
// }
// echo "Nama Produk: $produk\n";
// echo "Deskripsi Produk: $desc\n";
// if (is_numeric($harga)){
//     $harga = number_format($harga, 0, "", ".");
//     echo "Harga Produk: Rp. $harga\n";
// }
// else {
//     echo "Masukkan input yang benar\n";
//     goto harga;
// }

// Manipulasi array
// $array1 = ["Buku", "Pensil", "Pulpen"];
// $array2 = [
//     "Merah" => "Apel",
//     "Kuning" => "Lemon",
//     "Hijau" => "Mangga"
// ];

// echo implode("-", $array2) . "\n";

// var_dump(explode(",", "Buku,Pensil,Pulpen"));

// count: menghitung jumlah data array
// echo count($array1) . "\n";
// var_dump($array2);

// mengubah salah satu data di dalam array
// $array2["Hijau"] = "Melon";
// echo $array2["Hijau"];

// Menhapus data array
// unset($array2["Hijau"]);
// var_dump($array2);
// unset($array1);
// $array1 = NULL
// var_dump($array1);
// unset($array1[1]);
// var_dump($array1);

// Menambah data array
// $array1[] = "Papan tulis";
// $array1[6] = "Kertas";
// var_dump($array1);

// Menggabungkan beberapa array
// echo "Array 1 dan 2 menjadi array 3: \n";
// $array3 = array_merge($array1, $array2);
// $keys3 = array_keys($array3);
// $values3 = array_values($array3);
// var_dump($array3);
// Menampilkan indeksnya saja
// foreach($keys3 as $keys) {
//     echo $keys . "\n";
// }

// Mengurut data array
// $acak = [3,1,5,2,4];
// rsort($acak);
// foreach($acak as $key => $value) {
//     echo $value . "\n";
// }

// Shuffle: mengacak value array
$jankenpon = ["Batu", "Kertas", "Gunting"];
shuffle($jankenpon);
echo $jankenpon[0];