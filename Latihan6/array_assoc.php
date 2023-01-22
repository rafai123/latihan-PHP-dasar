<?php
    $mahasiswas = [
        [
            "nama" => "Muhammad Rafai",
            "nim" => "2001028",
            "jurusan" => "Teknik Informatika",
            "email" => "rafaimhd1232gmail.com"      
        ],
        [
            "nama" => "Yatogami Tohka",
            "nim" => "2001029",
            "jurusan" => "Teknik Informatika",
            "email"=> "yatogamitohka@gmail.com"
        ],
        [
            "nama" => "Tobiichi Origami",
            "nim" => "2001030",
            "jurusan" => "Teknik Informatika",
            "email" => "tobiichiorigami@gmail.com"
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
            <li>Nama : <?php echo $mahasiswa["nama"] ?> </li>
            <li>Nim : <?php echo $mahasiswa["nim"] ?> </li>
            <li>Jurusan : <?php echo $mahasiswa["jurusan"] ?> </li>
            <li>email : <?php echo $mahasiswa["email"] ?> </li>
        </ul>
    <?php endforeach; ?>
</body> 
</html>