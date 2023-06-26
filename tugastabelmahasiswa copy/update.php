<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$npm = $_POST['npm'];
$program_studi = $_POST['program_study'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];

// update data ke database
mysqli_query($koneksi,"update mahasiswa set nama='$nama', npm='$npm',program_study='$program_studi',tempat_lahir='$tempat_lahir',jenis_kelamin='$jenis_kelamin',agama = '$agama', alamat='$alamat' where npm='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>