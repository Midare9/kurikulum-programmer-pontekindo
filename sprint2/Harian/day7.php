<?php
$array = [
    "Top" => [
        "id" => "Top",
        "nama barang" => "Knitted Hat",
        "harga" => "299.000",
        "jumlah_stok" => "18",
        "deskripsi" => "Penutup kepala yang dibuat khusus",
        "tanggal_produksi" => "18 Juli 2023"
    ],
    "Bottom" => [
        "id" => "Bottom",
        "nama barang" => "Pleated Pants",
        "harga" => "599.000",
        "jumlah_stok" => "8",
        "deskripsi" => "Tampil rapi dan juga kasual",
        "tanggal_produksi" => "18 Juli 2023"
    ]
    ];

$no = 1;
foreach ($array as $key => $value) {
    echo "$no.". $key. "\n";
    foreach ($value as $key1 => $value1) {
            echo "$key1: ". $value1. "\n";
    }
    $no++;
}

// manipulasi string: mengubah/mengedit, menambah, menghapus, tipe data string
// strlen: menghitung panjang string -> menghitung jumlah karakter
// $string = "Hello World Coding";
// $var = "INI";
// $number = 1_534_213_983;
// var_dump(strlen($string));

// str_word_count: menhitung jumlah kata
// var_dump(str_word_count($string));

// str_replace: mengganti string dengan yang baru

// number_format: mengubah angka menjadi string dengan format angka

// strtoupper: mengubah semua huruf menjadi kapital
// var_dump(strtoupper($string));

// strtolower: mengubah semua huruf menjadi huruf kecil
// var_dump(strtolower($var));

// ucwords: mengubah huruf pertama menjadi kapital
// var_dump(ucwords());
// var_dump(ucwords(strtolower()));

// str_repeat: mengulang string
// echo str_repeat($string,4);

// substr: mengambil beberapa karakter dari data string
// var_dump(substr($string,3,6));

// $buku = "buku";
// menggunakan kurung kurawal (curly brace) pada variabel di dalam string
// echo "Saya sedang melakukan pem{$buku}an\n" . "Saya beli buku baru\n";

// menngeubah tipe data
// menjadi string
// $a = (string) 100;
// var_dump($a);
// menjadi integer
// $b = (int) "220";
// var_dump($b);

// $c = (float) trim(fgets(STDIN));
// var_dump($c);

// explode: mengubah string menjadi array
// var_dump(explode(" ", $string));

// $c = ["Hello", "World", "Coding"];
// implode: mengubah array menjadi string
// var_dump(implode("-", $c));