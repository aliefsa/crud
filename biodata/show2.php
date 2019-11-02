<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
</head>
<body>
    <!-- Content -->
    <br><br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Biodata</div>
                    <div class="card-body">
                        <div class="form-group">
                                <div class="table-responsive">
                                    <table class="table" border="1">
                                        <?php

                                        include '../database.php';
                                        $data = new Data();
                                        $no = 1;

                                        foreach ($data->show($_GET['id']) as $values) {
                                            $nama = $values['nama'];
                                            $alamat = $values['alamat'];
                                            $jenis_kelamin = $values['jenis_kelamin'];
                                            $tanggal_lahir = $values['tanggal_lahir'];
                                            $agama = $values['agama'];
                                            $umur = $values['umur'];
                                            ?>
                    
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Agama</th>
                                            <th>Umur</th>
                                        </tr>
                                            <tr>
                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo $nama; ?></td>
                                                <td><?php echo $alamat; ?></td>
                                                <td><?php echo $jenis_kelamin; ?></td>
                                                <td><?php echo $tanggal_lahir; ?></td>
                                                <td><?php echo $agama; ?></td>
                                                <td><?php echo $umur; ?></td>
                                            </tr>
                                        <?php

                                    }
                                    ?>
                                    </table>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Content --> 

    <!-- Footer -->
    <footer>
        <br><center>&copy; SMK ASSALAAM BANDUNG</center>
    </footer>

    <!-- Enf Footer -->

    <!-- JS -->
    <script src="/assets/js/jquery-3.4.1.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <!-- End JS -->
</body>
</html>
</body>
<!-- </html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan CRUD - Show Data</title>
</head>

<body>
    <?php
    foreach ($data->show($_GET['id']) as $values) {
        $nama = $values['nama'];
        $alamat = $values['alamat'];
        $jenis_kelamin = $values['jenis_kelamin'];
        $tanggal_lahir = $values['tanggal_lahir'];
        $agama = $values['agama'];
        $umur = $values['umur'];
    }
    ?>
    <fieldset>
        <legend>Show Data Siswa</legend>
        <table>
            <tr>
                <th>Nama Siswa</th>
                <td><input type="text" name="nama" value="<?php echo $nama; ?>" readonly></td>
            </tr>
            <tr>
                <th>Alamat Siswa</th>
                <td><textarea name="alamat" cols="40" readonly><?php echo $alamat; ?></textarea></td>
            </tr>
        </table>
    </fieldset> -->