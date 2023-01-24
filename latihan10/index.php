<?php

    require "function.php";

    $contents = query("SELECT * FROM biodata", $conn);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySQL Add Data</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>

    <a href="tambah.php">Tambah Data!</a>

        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No</th>
                <th>Aksi</th>
                <th>Gambar</th>
                <th>Nama</th>
                <th>Nim</th>
                <th>Jurusan</th>
                <th>Email</th>

            </tr>

    <?php $i = 1; ?>
    
    <?php foreach ( $contents as $content ) : ?>
        
            <tr>
                <td><?php echo $i; ?></td>
                
                <td><a href="">Ubah</a> | <a href="hapus.php?id=<?php echo $content["id"]?>" onclick="return confirm('Apakah anda yakin ingin mengapus data ini?')">Hapus</a></td>

                <td><img src="img/<?php echo $content["gambar"] ?>" width="100px"></td>
           
                <td>Nama : <?php echo $content["nama"] ?></td>
            
                <td>NIM : <?php echo $content["nim"] ?></td>
            
                <td>Jurusan : <?php echo $content["jurusan"] ?></td>
            
                <td>Email : <?php echo $content["email"] ?></td>
            </tr>
        </ul>
    <?php $i++; ?>        
    <?php endforeach; ?>
    </table>
    
</body>
</html>