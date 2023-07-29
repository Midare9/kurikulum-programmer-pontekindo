<?php
include_once "../helper/input.php";
include_once "../helper/edit.php";
include_once "../controller/create.php";
include_once "../controller/read.php";
include_once "../controller/update.php";


function viewcreate() {
    $baru = input();
    create($baru);
}
function viewread() {
    read("ucwords");
}
function viewedit() {
    inputdaftaredit();
}
function viewupdate() {
    update();
    $update = inputdaftaredit();
    update($urutan);
}

echo "====Todoo-App====\n";
echo "Belum ada daftar apapun\n";
tambahdaftar:
while(true) {
    echo "Buat/tambahkan daftar baru: ";
    viewcreate();
    viewread();
    done:
    echo "Selesai? (Y/N)";
    $done = trim(strtoupper(fgets(STDIN)));
    if($done == "Y") {
        viewread();
        opsi:
        echo "Opsi\n";
        echo "1. Edit daftar\n";
        echo "2. Hapus daftar\n";
        echo "3. Keluar\n";
        echo "Pilih: ";
        $opsi = trim(fgets(STDIN));
        if($opsi == 1) {
            edit:
            echo "Pilih daftar yang ingin diedit: ";
            viewedit();
            // $edit = trim(fgets(STDIN));
            // echo "Anda akan mengedit $daftar[$urutan]\n";
            echo "Masukkan daftar baru: ";
            viewupdate();
            // $update = trim(fgets(STDIN));
            // $array[$edit] = $update;
            foreach ($array as $key => $value) {
                echo "$key. " . $value . "\n";
            }
            editlagi:
            echo "Ingin mengedit daftar yang lain? (Y/N): \n";
            $editlagi = trim(strtoupper(fgets(STDIN)));
            if($editlagi == "Y") {
                goto edit;
            }
            elseif($editlagi == "N") {
                goto opsi;
            }
            else {
                echo "Input tidak valid\n";
                goto editlagi;
            }
        }
        elseif($opsi == 2) {
            hapus:
            echo "Pilih data yang ingin dihapus: ";
            $delete = trim(fgets(STDIN));
            echo "Anda akan menghapus $array[$delete]\n";
            for($i = $delete; $i < count($array); $i++) {
                $array[$i] = $array[$i+1];
            }
            unset($array[count($array)]);
            foreach ($array as $key => $value) {
                echo "$key. " . $value . "\n";
            }
            hapuslagi:
            echo "Ingin menghapus daftar yang lain? (Y/N): \n";
            $hapuslagi = trim(strtoupper(fgets(STDIN)));
            if($hapuslagi == "Y") {
                goto hapus;
            }
            elseif($hapuslagi == "N") {
                goto opsi;
            }
            else {
                echo "Input tidak valid\n";
                goto hapuslagi;
            }

        }
        elseif($opsi == 3) {
            echo "Anda telah keluar\n";
            exit;
        }
    }
    elseif($done == "N") {
        goto tambahdaftar;
    }
    else {
        echo "Input tidak valid\n";
        goto done;
    }
}