<?php
include_once "../model/data.php";
include_once "../controller/read.php";

function viewread() {
    global $santri;
    if(empty($santri)) {
        echo "Data kosong\n";
    }
    else {
        echo "-----Data santri-----\n";
        read("ucwords");
    }
}