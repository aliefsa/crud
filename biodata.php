<?php
class Biodata
{
    public $host = "localhost", $user = "root", $pass = 123, $db = "xirpl2";
    public $koneksi;

    public function __construct()
    {
        $this->koneksi = mysqli_connect(
            $this->host,
            $this->user,
            $this->pass,
            $this->db
        );
        if ($this->koneksi) {
          //echo "berhasil";
        } else {
            echo "Koneksi Database Gagal";
        }
    }
}
// Data Tabel
include 'data.php';

// koneksi DB
$db = new Biodata();