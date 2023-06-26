<?php 
require 'functions.php';
$result = mysqli_query($conn,"SELECT * FROM mahasiswa");
if(!$result){
    echo mysqli_error($conn);
}


?>

<html>
    <head>
        <title>Halaman admin</title>
    </head>
    <body>
        <h1>Daftar Mahasiswa</h1>
        
        <table border="1" cellpadding="10" cellspacing="0">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Aksi</th>
                    <th>Gambar</th>
                    <th>Nama</th>
                    <th>Nrp</th>
                    <th>Email</th>
                    <th>Jurusan</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=1?>
            <?php
             while ($a = mysqli_fetch_assoc($result)) : ?>
                
                <tr>
                    <td><?php  echo $i  ?></td>
                    <td><a href=""></a>ubah
                    <a href=""></a>hapus
                    </td>
                    <td><img src="" alt="" srcset=""></td>
                    <td><?= $a['nama'] ?></td>
                    <td><?= $a['nrp'] ?></td>
                    <td><?= $a['email'] ?></td>
                    <td><?= $a['jurusan'] ?></td>
                    </tr>;
                    <?php $i++; ?>
               <?php endwhile; ?>
            </tbody>
        </table>
    </body>
</html>