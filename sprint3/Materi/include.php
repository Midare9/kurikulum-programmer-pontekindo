<?php


echo "ini include\n";// program akan tetap berjalan walaupun misalnya file tidak ada atau hanya memberi peringatan
include_once "day12.php";// untuk berjaga-jaga lebih aman menggunakan _once sehingga file hanya boleh digunakan sekali
include "day12.php";
sayHai("Danu");
echo "ini include\n";
echo "ini include\n";
echo "ini include\n";