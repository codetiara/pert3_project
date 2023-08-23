<?php

require('../Models/Mkelas.php');

class Ckelas {

    public function SimpanKelas($name) {
        $db = new Mkelas();
        echo $db->Simpan($name);
    }

    public function UpdateKelas($name, $newName) {
        $db = new Mkelas();
        echo $db->Update($name, $newName);
    }

    public function DeleteKelas($name) {
        $db = new Mkelas();
        echo $db->Delete($name);
    }
}

?>