<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$npm = $_POST['npm'];
$program_studi = $_POST['program_study'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];


// menginput data ke database
mysqli_query($koneksi, "INSERT INTO mahasiswa (npm,program_study,nama,tempat_lahir,tanggal_lahir,jenis_kelamin,agama,alamat) VALUES ('$npm','$program_studi','$nama','$tempat_lahir','$tanggal_lahir','$jenis_kelamin', '$agama','$alamat')");
// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>