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
                                    <table class="table">
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Agama</th>
                                            <th>Umur</th>
                                            <th colspan="3"><center>Aksi</center></th>
                                        </tr>
                                        <?php
                                        include '../database.php';
                                        $data = new Data();
                                        $no = 1;
                                        // var_dump($siswa->index());
                                        foreach ($data->index() as $values) { ?>
                                            <tr>
                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo $values['nama']; ?></td>
                                                <td><?php echo $values['alamat']; ?></td>
                                                <td><?php echo $values['jenis_kelamin']; ?></td>
                                                <td><?php echo $values['tanggal_lahir']; ?></td>
                                                <td><?php echo $values['agama']; ?></td>
                                                <td><?php echo $values['umur']; ?></td>

                                                <td>
                                                    <a href="show2.php?id=<?php echo $values['id']; ?>">Show</a>
                                                </td>
                                                <td>
                                                    <a href="edit2.php?id=<?php echo $values['id']; ?>">Edit</a>
                                                </td>
                                                <td>
                                                    <a href="proses2.php?id=<?php echo $values['id']; ?>&aksi=delete"
                                                    onclick="return confirm('Apakah Anda Yakin Mau menghapus data ini ?')">Delete</a>
                                                </td>
                                            </tr>
                                        <?php

                                    }
                                    ?>
                                    </table>
                                    <tr>
                                        <hr><td colspan="12"><a href="create2.php">Tambah Data</a></td>
                                    </tr>
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