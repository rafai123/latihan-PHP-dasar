<?php

    $mahasiswas = [
        ["Muhammad Rafai", 2001028, "Teknik Informatika", "rafaimhd123@gmail.com"],
        ["Yatogami Tohka", 2001029, "Teknik Informatika", "yatogamitohka@gmail.com"],
        ["Tobiichi Origami", 2001030, "Teknik Informatika", "tobiichiorigami@gmail.com"]
    ];




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array PHP</title>
</head>
<body>
    <h1>
        Daftar Mahasiswa
    </h1>


    <?php foreach ($mahasiswas as $mahasiswa) : ?>
        <ul>
            <li>Nama : <?php echo $mahasiswa[0]; ?></li>
            <li>NIM : <?php echo $mahasiswa[1]; ?> </li>
            <li>Jurusan : <?php echo $mahasiswa[2]; ?> </li>
            <li>Email : <?php echo $mahasiswa[3]; ?> </li>
        </ul>
    <?php endforeach; ?> 
</body>
</html>