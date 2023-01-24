<?php

    require "function.php";

    $contents = query($conn, "SELECT * FROM biodata");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySQL Connect</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>


    <?php foreach ( $contents as $content ) : ?>    
        <table border="1" cellspacing="0" cellspan="10">
                <img src="img/<?php echo $content["gambar"]; ?>" width="170px">
            <tr>
                <td>Nama : </td>
                <td><?php echo $content["nama"]; ?></td>
            </tr>
            <tr>
                <td>NIM : </td>
                <td><?php echo $content["nim"]; ?></td>
            </tr>
            <tr>
                <td>Email : </td>
                <td><?php echo $content["email"]; ?></td>
            </tr>
            <tr>
                <td>Jurusan : </td>
                <td><?php echo $content["jurusan"]; ?></td>
            </tr>
        </table>
        <br>
    <?php endforeach; ?>
</body>
</html>