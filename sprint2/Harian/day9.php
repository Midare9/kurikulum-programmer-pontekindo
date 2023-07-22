<?php
// // $array = [];
// // $array[1] = "Bola";
// // var_dump($array);
// $array = [];
// while (true) {
//     $input = trim(fgets(STDIN));
//     $array[count($array) +1] = $input;
//     // echo $array . "\n";
//     // echo count($array) . "\n";
//     foreach ($array as $key => $value) {
//         echo $key . $value . "\n";
//     }
//     echo "Edit data (Y/N)";
//     $e = trim(fgets(STDIN));
//     if($e == "Y") {
//         // update
//         echo "Pilih data yang ingin diedit: ";
//         $edit = trim(fgets(STDIN));
//         echo "Anda akan mengedit $array[$edit]\n";
//         echo "Masukkan data baru: ";
//         $update = trim(fgets(STDIN));
//         $array[$edit] = $update;
//     }
//     echo "Hapus data (Y/N)";
//     $h = trim(fgets(STDIN));
//     if($h == "Y") {
//         // delete
//         // menimpa data array terlebih dahulu
//         // baru dihapus data yang bagian akhir
//         echo "Pilih data yang ingin dihapus: ";
//         $delete = trim(fgets(STDIN));
//         echo "Anda akan menghapus $array[$delete]\n";
//         for($i = $delete; $i < count($array); $i++) {
//             $array[$i] = $array[$i+1];
//         }
//         unset($array[count($array)]);
//     }
// }

// Function: wadah yang berisi suatu program tertentu yang bisa kita gunakan kalau kita memanggilnya
// Kode : Function
// function sayHello() {
//     echo "Hello Function" . "\n";
// }

// sayHello();

// // Menggunakan satu parameter
// function notif($nama) { // Parameter
//     // global $nama, $kelas; // Apabila nekat mengambil variabel diluar parameter
//     echo "$nama telah terdaftar\n";
// }

// notif("Danu"); // Argument: value yang akan dikirimkan parameter
// // $daftar = true;
// // if($daftar == true) {
// //     notif();
// // }

// default parameter
function sayHi($nama, $greeting = "Good Morning") { // Agar lebih berguna parameter default diletakkan di akhir
    echo "Hello $nama! $greeting\n";
}

// sayHi();
sayHi("Danu", "Selamat pagi");

// Type declaration
// function harusangka(int $angka):int { // Memvalidasi apakah data yang dimasukkan adalah integer
//     echo $angka . "\n";
// }

// harusangka("Huruf");

function sum(int $a, int $b) {
    $t = $a + $b;
    echo "$a + $b = $t\n";
}

sum("100", "100");

function total(...$jumlah) {
    // var_dump($jumlah);
    $total = 0;
    foreach($jumlah as $value) {
        $total += $value;
    }
    echo "Total: $total\n";
}

total(1,2,3,4,5,6);

function listnama(...$listnama) {
    $no = 1;
    foreach($listnama as $value) {
        echo "$no-" .  $value . "\n";
        $no++;
    }
}

listnama("Danu", "Hafidz", "Faqih");

// Function Return Value
// Highlighted
function jumlah(int $first, int $second) {
    return $first + $second; //Baru menampung suatu data
}

echo jumlah(100, 100) . "\n";

// Return Type Declaration
