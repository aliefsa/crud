<?php
include '../database.php';
$data = new Data();

$aksi = $_GET['aksi'];
if (isset($_POST['save'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $agama = $_POST['agama'];
    $umur = 2078 - $tanggal_lahir;
}
var_dump($umur);

if ($aksi == "tambah") {
    $data->create($nama, $alamat, $jenis_kelamin, $tanggal_lahir, $agama, $umur);
    header("location:index2.php");//Aliefsa
} elseif ($aksi == "update") {
    $data->update($id, $nama, $alamat, $jenis_kelamin, $tanggal_lahir, $agama, $umur);
    header("location:index2.php");
} elseif ($aksi == "delete") {
    $data->delete($_GET['id']);
    header("location:index2.php");
}