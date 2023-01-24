<?php
    session_start();

    if ( !isset($_SESSION["login"]) ) {
        header("location: login.php");
        exit;
    }
    require "function.php";

    $contents = query("SELECT * FROM biodata");

    // var_dump($contents)

    // jika tombol cari di tekan
    if ( isset($_POST["search"]) ) {
        $contents = search($_POST["keyword"]);
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Database</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <a href="tambah.php" class="add-data">Tambah Data</a>
    
    <a href="login.php" class="add-data">Login</a>

    <a href="logout.php" class="add-data">Logout</a>
    <br>
    <p></p>
    

    <form action="" method="post">
        <span><input type="text" autofocus name="keyword" placeholder="Masukkan Pencarian.." size="50" class="search-bar"></span>
        <span><button type="submit" name="search" class="search-button">Cari</button></span>
        
    </form>

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