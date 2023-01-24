<?php

    $conn = mysqli_connect("localhost", "root", "", "mahasiswa");

    $result = mysqli_query($conn, "SELECT * FROM biodata");

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


    <?php while ( $rows = mysqli_fetch_assoc($result) ) : ?>    
        <table border="1" cellspacing="0" cellspan="10">
                <img src="img/<?php echo $rows["gambar"]; ?>" width="170px">
            <tr>
                <td>Nama : </td>
                <td><?php echo $rows["nama"]; ?></td>
            </tr>
            <tr>
                <td>NIM : </td>
                <td><?php echo $rows["nim"]; ?></td>
            </tr>
            <tr>
                <td>Email : </td>
                <td><?php echo $rows["email"]; ?></td>
            </tr>
            <tr>
                <td>Jurusan : </td>
                <td><?php echo $rows["jurusan"]; ?></td>
            </tr>
        </table>
        <br>
    <?php endwhile; ?>
</body>
</html>