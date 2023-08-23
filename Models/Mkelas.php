<?php
    require('../Config/Database.php');

    Class MKelas{


        function Simpan($name){
            global $koneksi; // Access the global $koneksi variable
            $sql="insert into kelas values('".$name."')";
            $res = mysqli_query($koneksi,$sql);
            // return
            if($res == 1) {
                // return "Data [".$nis." - ".$nama. "] Berhasil Disimpan";
                return "Data Berhasil Disimpan";
            }

        }

        // function Update($nama, $newNama) {
        //     global $koneksi; // Access the global $koneksi variable
            
        //     $sql = "UPDATE kelas SET nama = '$newNama' WHERE nama = '$nama'";
        //     $res = mysqli_query($koneksi, $sql);
        //     if ($res == 1) {
        //         return "Berhasil";
        //     } else {
        //         return "Gagal";
        //     }
        // }

        function Update($name, $newName) {
            global $koneksi; // Access the global $koneksi variable
            
            $sql = "UPDATE kelas SET name = '$newName' WHERE name = '$name'";

            try {
                $res = mysqli_query($koneksi, $sql);
                return "Data Berhasil Diupdate";
            } catch (mysqli_sql_exception $e) {
                var_dump($e->getMessage());
                return "Data Gagal Diupdate: " . $e->getMessage();
            }
            
        }
        

        function Delete($name) {
            global $koneksi; // Access the global $koneksi variable
            
            $sql = "DELETE FROM kelas WHERE name = '$name'";
            $res = mysqli_query($koneksi, $sql);
        
            if ($res == 1) {
                return "Data Berhasil Didelete";
            } else {
                return "Data Gagal Didelete";
            }
        }
        
        
    }
?>