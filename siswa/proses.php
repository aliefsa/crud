<?php
include '../biodata.php';
$data = new Data();

$aksi = $_GET['aksi'];
if (isset($_POST['save'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $nis = $_POST['nis'];
    $alamat = $_POST['alamat'];
}

if ($aksi == "tambah") {
    $data->create($id, $nama, $nis, $alamat);
    header("location:index.php");
} elseif ($aksi == "update") {
    $data->update($id, $nama, $nis, $alamat);
    header("location:index.php");
} elseif ($aksi == "delete") {
    $data->delete($_GET['id']);
    header("location:index.php");
}
