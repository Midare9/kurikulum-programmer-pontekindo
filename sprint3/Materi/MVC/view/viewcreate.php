<?php
include_once "../controller/create.php";
include_once "../helper/input.php";

function viewcreate() {
    echo "Masukkan nama santri: ";
    $nama = input();
    create($nama);
}