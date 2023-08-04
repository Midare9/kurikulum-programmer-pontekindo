<?php
include_once "../model/data.php";

function read($filter) {
    global $daftar;
    foreach($daftar as $no => $baru) {
        echo "$no. " . $filter($baru) . "\n";
    }
}