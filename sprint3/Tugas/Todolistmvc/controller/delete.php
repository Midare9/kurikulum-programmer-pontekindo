<?php
include_once "../model/data.php";

function delete($delete) {
    global $daftar;
    for($i = $delete; $i < count($daftar); $i++) {
        $daftar[$i] = $daftar[$i+1];
    }
    unset($daftar[count($daftar)]);
}