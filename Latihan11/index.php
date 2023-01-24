<?php
    require "function.php";

    $contents = query("SELECT * FROM biodata");

    // var_dump($contents)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Database</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <p><a href="tambah.php">Tambah Data</a></p>
    <br>

    

    <table border="1" cellspacing="0" cellpadding="10">

    
        <tr>
            <th>No</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
            <th>Email</th>
        </tr>

    <?php $i = 1; foreach ($contents as $content) : ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><a href="update.php?id=<?php echo $content["id"];?>">Ubah</a> | <a href="delete.php?id=<?php echo $content["id"] ?>" onclick="return confirm('Yakin?');" >Hapus</a></td>
            <td><img src="img/<?php echo $content["gambar"]; ?>" width="100px"></td>
            <td><?php echo $content["nama"]; ?></td>
            <td><?php echo $content["nim"]; ?></td>
            <td><?php echo $content["jurusan"]; ?></td>
            <td><?php echo $content["email"]; ?></td>
        </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
    </table>
</body>

















</html,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,n8e9.l>