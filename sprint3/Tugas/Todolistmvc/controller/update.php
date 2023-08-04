<?php
include_once "../model/data.php";

function update($nomor) {
    global $daftar;
    $update = input();
    $daftar[$nomor] = $update;
}