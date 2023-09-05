<?php
class laptop {
    const DB = "MARIA DB"; // cara define tidak bekeja di dalam class
    // const // berikut standar penulisan di dalam class, constant ditulis terlebih dahulu

    var ?string $brand; // nullable properties
    var int $price = 15000; // default value

    function __construct() {
        echo "Hai saya adalah construct <br>";
    }
    
    function sayThis(string $milik, $c):string { // type declaration
        return "INI LAPTOP " . $c($milik);
    }

    function hargaproduk() {
        $harga = number_format($this->price,0,0,'.');
        echo "Laptop merek {$this->brand} <br> Harganya Rp. {$harga}"; // merupakan this keyword
        echo "<br> Database yang digunakan adalah " . self::DB; // kata kunci selanjutnya yaitu self untuk constant
    }

    function __destruct() { // destruct akan otomatis dijalankan diakhir
        echo "<br> Hai saya adalah destruct";
    }
}
class santriPondokTeknologi {

}

// $lenovo = new laptop();
// $lenovo -> brand = "Lenovo";
// // $lenovo -> brand = NULL;
// $lenovo -> price = 4500000;
// // var_dump($lenovo); 
// // echo "Nama Brand: " . $lenovo -> brand;
// // echo "<br>";
// // echo "Harga: Rp" . number_format($lenovo -> price, 0, 0, ".");
// // echo "<br>";
// // echo $lenovo -> sayThis("Fauzan", "strtoupper"); // argumen kedua variable function

// // echo "<br>";
// // $asus = new laptop();
// // $hp = new laptop();
// // var_dump($asus, $hp, $lenovo);
// $lenovo->hargaproduk();
// echo "<br>";
// echo Laptop::DB; // cara memanggil constant yang ada di dalam class

class NamaProduk extends laptop {

}

// $laptop = new Laptop();
$asus = new NamaProduk();
echo $asus->price;