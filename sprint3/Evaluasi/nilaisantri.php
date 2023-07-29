<?php
function nilaisantri($nilai) {
    sort($nilai);
    foreach($nilai as $value) {
        echo $value. "\n";
    }
}