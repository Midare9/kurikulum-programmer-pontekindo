<?php
do {
    echo "---PerpusKu---\n";
    echo "1. Periksa pengembalian dan denda buku\n";
    echo "2. Keluar\n";
    echo "Pilih: ";
    $menu = (int) trim(fgets(STDIN));
    if ($menu == 1) {
        echo "---PerpusKu---\n";
        echo "Masukkan Nama Konsumen: ";
        $nama = trim(fgets(STDIN));
        echo "Masukkan Judul Buku: ";
        $judul = trim(fgets(STDIN));
        echo "Masukkan Lama Batas Peminjaman (hari): ";
        $batas = trim(fgets(STDIN));
        echo "Masukkan Lama Buku Dipinjam (hari): ";
        $lama = trim(fgets(STDIN));
        $harga = 15000;
        echo "---PerpusKu---\n";
        echo "Harga Sewa: $harga\n";
        if ($lama > $batas) {
            $terlambat = $lama - $batas;
            $denda = 3000 * $terlambat;
            echo "Denda Yang Harus Dibayar: Rp $denda\n";
        }
        else if ($lama <= $batas) {
            $denda = 0;
            echo "Denda Yang Harus Dibayar: Rp $denda\n";
        }
        $total = $harga + $denda;
        echo "Total: $harga + $denda = $total\n";
    }
    else if ($menu == 2) {
        echo "Anda telah keluar\n";
        exit;
    }
    else {
        echo "Pilihan tidak tersedia\n";
    }
    echo "Kembali ke menu? (Y/N): ";
    $kembali = trim(fgets(STDIN));
}
while ($kembali == "Y");
