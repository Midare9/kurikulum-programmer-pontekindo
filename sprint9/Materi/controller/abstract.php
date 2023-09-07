<?php
abstract class Kendaraan {
    static public $string = "Kendaraan"; // tidak akan muncul apabila dipanggil
    abstract function berjalan();
    protected function gas() {
        echo "ini kelas parent";
    }
}

class Mobil extends Kendaraan {
    // public $string = "Mobil";
    static public $string = "Mobil";
    public function gas() {
        // echo "ini kelas child";
        // parent::gas();
        echo parent::$string; // akan error karena bukan static property
    }
    public function berjalan() {
        echo "Berjalan";
    }
}

class Motor {
    static public function berjalan() {
        echo "Berjalan";
    }
}
// $abstract = new Mobil();
// $abstract->gas();
echo Kendaraan::$string; // dapat dipanggil bahkan tanpa membuat objek terlebih dahulu, pemanggilan static function
Motor::berjalan();
Mobil::gas();