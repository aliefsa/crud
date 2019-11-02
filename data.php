<?php
class Data extends Database
{
    public function index()
    {
        $biodata = mysqli_query($this->koneksi, "select * from biodata");
        return $biodata;
    }

    public function create($nama, $alamat, $jenis_kelamin, $tanggal_lahir, $agama, $umur)
    {
        mysqli_query(
            $this->koneksi,
            "insert into biodata values(null,'$nama','$alamat','$jenis_kelamin','$tanggal_lahir','$agama','$umur')"
        );
    }

    public function show($id)
    {
        $biodata = mysqli_query(
            $this->koneksi,
            "select * from biodata where id='$id'"
        );
        return $biodata;
    }

    public function edit($id)
    {
        $biodata = mysqli_query(
            $this->koneksi,
            "select * from biodata where id='$id'"
        );
        return $biodata;
    }

    public function update($id, $nama, $alamat, $jenis_kelamin, $tanggal_lahir, $agama, $umur)
    {
        mysqli_query(
            $this->koneksi,
            "update biodata set nama='$nama', alamat='$alamat',
         jenis_kelamin='$jenis_kelamin',tanggal_lahir='$tanggal_lahir',
         agama='$agama',umur='$umur' where id='$id'"
        );
    }

    public function delete($id)
    {
        mysqli_query($this->koneksi, "delete from biodata where id='$id'");
    }
}

?>