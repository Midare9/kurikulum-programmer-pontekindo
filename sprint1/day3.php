<?php
// $kuin = [
//     "merah"=> [
//         "apple" => [
//             "manis",
//             "kecut",
//             "sepet",
//         ],
//         "strawberry",
//         "hairan",
//     ],
//     "hijau" =>"Mango",
//     "kuning" =>"banana",
//     "ungu"=>"grape",
//     "biru"=>"blueberry",
// ];

// var_dump($kuin);
// echo $kuin["merah"]["apple"][2];


// $number = [ "asus", "msi", "lenovo",];

// var_dump($number);
// echo $number[2];
// echo PHP_EOL;

// Operator perbandingan


// Sama dengan -> == : nilai yang dibandingkan dengan nilai lainnya, 
// //itu memilki nilai yang sama meskipun tipe data yang berbeda maka outputny true
// var_dump("1728" == 1728);

// // identik -> === : nilai dan tipe data harus sama agar outputny true
// var_dump(1728 === 1728);

// // tidak sama dengan -> <> / != : nilainy tidak sama maka hasilny true
// var_dump("21" != 21);
// var_dump ("21" <> 21);

// // tidak identik -> !== : nilai dan type data tidak sama maka hasilny true
// var_dump("100" !== 100);

// kurang dari -> <
// var_dump(23 < 22);
// var_dump(23 < 25);

// // lebih dari -> >
// var_dump(20 > 15);

// //kurang dari sama dengan -> <=
// var_dump(76<=81);

// //lebih dari sama dengan -> >=
// var_dump(53>=53);

// //Operator logika
// // And -> && / and : salah satu false maka false
// var_dump(true && true);
// var_dump(77<="77" && 25==="25");

// Or -> || / or : salah satu true maka hasilnya true
// var_dump(true || ture);

// xor -> xor : kalau input sama maka hasilny false
// var_dump(true xor true);

// not -> ! : false

// Operator Increment dan Decrement
// post increment -> ++ (diakhir) dikembalikan dulu varny baru di tambah nilai 1
// $angka = 22;
// $angka++;
// echo $angka .PHP_EOL;
//pre increment -> ++ (diawal) ditambah nilai 1 dlu baru di kembalikan ke varnya
// $angka = 22;
// ++$angka;
// echo $angka .PHP_EOL;
//post decrement -> -- (diakhir) dikembalikan dlu var nya baru dikurang 1
// $angka = 22;
// $angka--;
// echo $angka .PHP_EOL;
// pra decremnt -> -- (diawal) Dikurang 1 dlu baru di kembalikan ke varny
// $angka = 22;
// --$angka;
// echo $angka .PHP_EOL;

$a = 1;
$b = 1;

$a = $b++;
echo $a . PHP_EOL;
echo $b . PHP_EOL;
