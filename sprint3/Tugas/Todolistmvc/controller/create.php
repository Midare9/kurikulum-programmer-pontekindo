<?php
include_once "../model/data.php";
include_once "../helper/input.php";

function create($baru) {
    global $daftar;
    $index = count($daftar)+1;
    $daftar[$index] = $baru;
}