<?php
    $mahasiswas = [
        [
            "nama" => "Muhammad Rafai",
            "nim" => "2001028",
            "jurusan" => "Teknik Informatika",
            "email" => "rafaimhd1232gmail.com"      ,
            "gambar" => "gintoki.jpg"
        ],
        [
            "nama" => "Yatogami Tohka",
            "nim" => "2001029",
            "jurusan" => "Teknik Informatika",
            "email"=> "yatogamitohka@gmail.com",
            "gambar" => "tohka.jpg"
        ],
        [
            "nama" => "Tobiichi Origami",
            "nim" => "2001030",
            "jurusan" => "Teknik Informatika",
            "email" => "tobiichiorigami@gmail.com",
            "gambar" => "origami.jpg"
        ]
    ];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Associative</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ( $mahasiswas as $mahasiswa ) : ?>
        <ul>
            <li><a href="detail.php?nama=<?php echo $mahasiswa["nama"]; ?>&nim=<?php echo $mahasiswa["nim"]; ?>&jurusan=<?php echo $mahasiswa["jurusan"]; ?>&email=<?php echo $mahasiswa["email"]; ?>&gambar=<?php echo $mahasiswa["gambar"]; ?> "> Nama : <?php echo $mahasiswa["nama"]; ?> </a></li>
        </ul>
    <?php endforeach; ?>
</body> 
</html>