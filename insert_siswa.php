<?php
include 'koneksi.php';
//ambil field
$nim = $_POST['nim'];
$nama_lengkap = $_POST['nama_lengkap'];
$agama = $_POST['agama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$nama_ayah = $_POST['nama_ayah'];
$nama_ibu = $_POST['nama_ibu'];
$alamat_rumah = $_POST['alamat_rumah'];
$asal_sekolah = $_POST['asal_sekolah'];
$no_hp = $_POST['no_hp'];
$no_hportu = $_POST['no_hportu'];

$hasil = $koneksi->query("INSERT INTO data_siswaeltibiz VALUES ('', '$nim',
 '$nama_peserta',
   '$agama', 
   '$jenis_kelamin',
    '$nama_ayah',
    '$nama_ibu',
    '$alamat_rumah',
    '$asal_sekolah',
    '$no_hp',
    '$no_hportu' )");
header('location:siswa.php');