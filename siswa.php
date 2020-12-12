<?php
include 'koneksi.php';
$peserta = $koneksi->query("SELECT * FROM data_siswaeltibiz");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- link untuk loading bootstrap.css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Pendaftaran Siswa Baru</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Pendaftaran Siswa Baru</h1>
                <div class="row">
                    <div class="col-md-12">
                        <h1>Daftar Peserta</h1>
                        <p>
                            <a href="index.php" class="btn btn-primary">Beranda</a>
                            <a href="tambah_siswa.php" class="btn btn-primary">Tambah</a>
                            <a href="cetak_siswa.php" class="btn btn-primary" target="_blank"><span
                                class="glyphicon glyphicon-print" aria-hidden="true"></span> Cetak</a>
                                <a href="cetak_peserta_xls.php" class="btn btn-primary"><span class="glyphicon
                                    glyphicon-print" aria-hidden="true"></span> Cetak XLS</a>
                                </p>
                                <table class="table table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-center">ID</th>
                                            <th>NIM</th>
                                            <th class="text-center">Nama Lengkap</th>
                                            <th>Agama</th>
                                            <th class="text-center">Jenis Kelamin</th>
                                            <th >jurusan</th>
                                            <th class="text-center">Nama Ayah</th>
                                            <th class="text-center">Nama Ibu</th>
                                            <th class="text-center">Alamat Rumah</th>
                                            <th class="text-center">Asal Sekolah</th>
                                            <th class="text-center">No.Handphone</th>
                                            <th class="text-center">No.Handphone ortu</th>
                                            
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1 ?>
                                        <?php foreach ($peserta as $row) : ?>
                                            <tr>
                                                <td class="text-center"><?php echo $no++ ?></td>
                                                <td><?php echo $row['nim'] ?></td>
                                                <td><?php echo $row['nama_lengkap'] ?></td>
                                                <td><?php echo $row['agama'] ?></td>
                                                <td class="text-center"><?php echo $row['jenis_kelamin'] == 'laki-laki' ? 'Laki-Laki' :
                                                'Perempuan' ?></td>
                                                <td class="text-center"><?php echo $row['jurusan'] ?></td>
                                                <td class="text-center"><?php echo $row['nama_ayah'] ?></td>
                                                <td class="text-center"><?php echo $row['nama_ibu'] ?></td>
                                                <td><?php echo $row['alamat_rumah'] ?></td>
                                                <td><?php echo $row['asal_sekolah'] ?></td>
                                                <td><?php echo $row['no_hp'] ?></td>
                                                <td><?php echo $row['no_hportu'] ?></td>



                                                
                                                <td class="text-center">
                                                    <a href="edit_siswa.php?id_siswa=<?php echo $row['id_siswa']; ?>"
                                                        class="btn btn-sm btn-warning">Edit</a>
                                                        <a href="delete_siswa.php?id_siswa=<?php echo $row['id_siswa']; ?>"
                                                            class="btn btn-sm btn-danger" onclick="return confirm('Hapus Data?')">Hapus</a>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- script untuk loading jquery.min.js -->
                    <script src="assets/js/jquery.min.js"></script>
                    <script src="assets/js/bootstrap.min.js"></script>
                </body>
                </html>
