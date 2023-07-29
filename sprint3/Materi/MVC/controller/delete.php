<?php
include_once "../model/data.php";
include_once "../helper/input.php";

function delete() {
    global $santri;
    echo "Data yang ingin dihapus: ";
    $delete = input();
    echo "Anda akan menghapus $santri[$delete]\n";
    for($i = $delete; $i < count($santri); $i++) {
        $santri[$i] = $santri[$i+1];
    }
    unset($santri[count($santri)]);
}