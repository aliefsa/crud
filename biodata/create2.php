<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan CRUD - Create Data</title>
</head>

<body>
    <fieldset>
        <legend>Input Biodata Baru</legend>
        <form action="proses2.php?aksi=tambah" method="post">
            <table>
                <tr>
                    <th>Nama</th>
                    <td><input type="text" name="nama" required></td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td><textarea name="alamat" cols="40" required></textarea></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>
                        <input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-laki
                        <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
                    </td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <td><input type="date" name="tanggal_lahir" required></td>
                </tr>    
                <tr>
                    <td>Agama</td>
                    <td>
                        <select name="agama">
                        <option value=""></option>
                        <option value="islam">Islam</option>
                        <option value="kristen">Kristen</option>
                        <option value="hindu">Hindu</option>
                        <option value="budha">Budha</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th><input type="submit" name="save" value="Masukan"></th>
                </tr>
            </table>
        </form>
    </fieldset>
</body>

</html>