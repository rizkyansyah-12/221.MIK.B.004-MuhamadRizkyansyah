<!doctype html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <!-- link untuk loading bootstrap.css -->
 <link rel="stylesheet" href="assets/css/bootstrap.min.css">
 <title>Siswa Eltibiz</title>
</head>
<body>
 <div class="container">
     <div class="row">
         <div class="col-md-12">
             <h1 >ELTIBIZ</h1>
             <div class="row">
                 <div class="col-md-12">
                     <h1>Tambah Peserta</h1>
                     <form action="insert_peserta.php" method="POST">
                       <div class="form-group">
                         <label for="" class="control-label">NIM</label>
                         <input type="text" name="nim" placeholder="Masukkan NIM" class="form-control" required>
                     </div>
                     <div class="form-group">
                         <label for="" class="control-label">Nama Lengkap</label>
                         <input type="text" name="nama_lengkap" placeholder="Masukkan Nama Lengkap" class="form-control" required>
                     </div>
                     <div class="form-group">
                         <label for="" class="control-label">Agama</label>
                         <select name="agama" class="form-control">
                             <option value="" selected disabled>--- Pilih Agama ---
                             </option>
                             <?php $all_agama = array('Islam', 'Kristen Katolik',
                             'Kristen Protestan', 'Hindu', 'Budha'); ?>
                             <?php foreach ($all_agama as $agama) { ?>
                                 <option value="<?php echo $agama ?>">
                                     <?php echo $agama ?>
                                 </option>
                             <?php } ?>
                         </select>
                     </div>
                     <div class="form-group">
                         <label for="">Jenis Kelamin</label>
                         <div class="radio">
                             <label>
                                 <input type="radio" name="jenis_ke" value="L">Laki-laki
                             </label>
                         </div>
                         <div class="radio">
                             <label>
                                 <input type="radio" name="jk" value="P">Perempuan
                             </label>
                         </div>
                     </div>
                     <div class="form-group">
                         <label for="" class="control-label">Jurusan</label>
                         <select name="jurusan" class="form-control">
                             <option value="" selected disabled>--- Pilih jurusan ---
                             </option>
                             <?php $all_jurusan = array('Administrasi Perkantoran', 'Akuntasi Perkantoran',
                             'IT Support', 'Manajemen Informatika & Komputer'); ?>
                             <?php foreach ($all_jurusan as $jurusan) { ?>
                                 <option value="<?php echo $jurusan ?>">
                                     <?php echo $jurusan ?>
                                 </option>
                             <?php } ?>
                         </select>
                     </div>
                     <div class="form-group">
                         <label for="" class="control-label">Nama Ayah</label>
                         <input type="text" name="nama_ayah" placeholder="Masukkan Nama Ayah" class="form-control" required>
                     </div>
                     <div class="form-group">
                         <label for="" class="control-label">Nama Ibu</label>
                         <input type="text" name="nama_ibu" placeholder="Masukkan Nama Ibu" class="form-control" required>
                     </div>

                     <div class="form-group">
                         <label for="" class="control-label">Alamat Rumah</label>
                         <textarea name="alamat_rumah" placeholder="Masukkan Alamat Rumah"
                         class="form-control" required></textarea>
                     </div>
                     <div class="form-group">
                         <label for="" class="control-label">No.Telphone</label>
                         <input name="no_hp" placeholder="Masukkan No.Telphone"
                         class="form-control" required></input>
                     </div>
                     <div class="form-group">
                         <label for="" class="control-label">No.Telphone Orang Tua</label>
                         <input name="no_hportu" placeholder="Masukkan No.Telphone Orang Tua"
                         class="form-control" required></input>
                     </div>

                     <div class="form-group">
                         <button type="submit" class="btn btn-primary">Simpan</button>
                         <a href="index.php" class="btn btn-default">Kembali</a>
                     </div>
                 </form>
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
