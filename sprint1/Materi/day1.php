<?php

// Tipe-tipe data Pada PHP
// Tipe Data Number

// var dump biasa dipakai untuk debugging sama halnya dengan print_r
var_dump(1234); // integer
// print_r(1234);

// number menggunakan pemisah berupa underscore atau garis bawah
var_dump(1_123_234_456);

var_dump(1.45); // float

// Tipe Data Boolean
var_dump(true); // benar
var_dump(false); // salah

var_dump((bool) 0);
var_dump((bool) "Danu");

// Tipe Data String -> Karakter
var_dump("karakter");
echo 'Danu\t Darajati'; // petik 1 terbatas untuk karakter saja
echo "Danu\t Darajati";

// Heredoc
echo <<<here

Danu

            Darajati

here;

// Tipe Data Null -> tipe data yang tidak memiliki nilai/value
var_dump(NULL);

// Tipa Data Array -> tipe data yang bisa berisi beberapa jenis tipe data
var_dump(array(1,true,"false",NULL)); // menggunakan fungsi array
var_dump([2,false,"true",NULL]); //menggunakan kurung siku


// VARIABLE
$nama="Danu";
$umur="17";

echo 'Nama saya adalah $nama, umur saya $umur';
echo "\n";
echo "Nama saya adalah $nama, umur saya $umur";

// CONSTANT / Konstanta -> tidak bisa diubah
define("NAMA", "Danu"); // menggunakan function bawaaan php define
define("TINGGI", "165");
const UMUR=17; // menggunakan const
echo "\n";
echo NAMA . UMUR . TINGGI; // tanda titik menyambung kedua konstanta
echo "\n";