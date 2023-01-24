<?php
 $nama = $_GET["nama"];
 $nim = $_GET["nim"];
 $jurusan = $_GET["jurusan"];
 $email = $_GET["email"];
 $gambar = $_GET["gambar"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Info Mahasiswa</title>
    <style>
        .container {
            margin : auto;
            background-color: #eee; 
            width: 400px;
            align-content: center;
        }
        img {
            margin: auto;
            max-height : 400px;
        }
        table {
            margin: auto;
        }
    </style>
</head>
<body>
    <div class="container">
    <h1>Detail Mahasiswa</h1>
        <div class="image"><img src="img/<?php echo $gambar; ?>"></div>
    <table>
        <tr>
            <td>Nama :</td>
            <td><?php echo $nama; ?></td>
        </tr>
        <tr>
            <td>NIM :</td>
            <td><?php echo $nim; ?></td>
        </tr>
        <tr>
            <td>Jurusan :</td>
            <td><?php echo $jurusan; ?></td>
        </tr>
        <tr>
            <td>Email :</td>
            <td><?php echo $email; ?></td>
        </tr>
    </table>
    </div>
</body>
</html>