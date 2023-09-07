<?php
interface Kendaraan {
    public function berjalan();
    public function gas();
}

class Mobil implements Kendaraan {
    public function berjalan() {
        echo "Berjalan";
    }
    public function gas() {
        echo "ngeGAS";
    }
    public function apa() {
        echo "apa";
    }
}

$mobil 