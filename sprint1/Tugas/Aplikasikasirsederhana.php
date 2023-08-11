<?php
echo "-----Menghitung Total Belanja------\n";
echo "Masukkan Nama Konsumen: ";
$nama = trim(fgets(STDIN));
echo "Masukkan Barang Pertama: ";
$barang1 = trim(fgets(STDIN));
echo "Masukkan Harga Barang Pertama: ";
$harga1 = trim(fgets(STDIN));
echo "Masukkan Barang Kedua: ";
$barang2 = trim(fgets(STDIN));
echo "Masukkan Harga Barang Kedua: ";
$harga2 = trim(fgets(STDIN));
echo "Masukkan Barang Ketiga: ";
$barang3 = trim(fgets(STDIN));
echo "Masukkan Harga Barang Ketiga: ";
$harga3 = trim(fgets(STDIN));
$harga1+=$harga2;
$harga1+=$harga3;
$total = $harga1;
echo "\n";
echo "Nama Santri: $nama\n";
switch($total) {
    case $total >= 50000:
        $total -= 10000;
        echo "Total: $total\n";
        echo "Diskon didapatkan sebesar Rp 10000 dari minimum belanja Rp 50000\n";
        break;
    default:
        echo "Total: $total\n";
        echo "Dapatkan potongan harga Rp 10000 dengan belanja minimum Rp 50000\n";
        break;
}