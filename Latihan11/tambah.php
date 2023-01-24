<?php
    require "function.php";

    if ( isset($_POST["submit"]) ) {
        if ( tambah($_POST) > 0 ) {
            echo "
                <script>
                    alert('tambah data berhasil');
                    document.location.href = 'index.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('tambah data gagal');
                    
                </script>
            ";
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <h1>Tambah Data</h1>

    <form action="" method="post">
        <table>
            <tr>
                <td>
                    <label for="nama">Nama</label>
                </td>
                <td>
                    <input type="text" name="nama" id="nama">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="nim">NIM</label>
                </td>
                <td>
                    <input type="text" name="nim" id="nim">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="jurusan">Jurusan</label>
                </td>
                <td>
                    <input type="text" name="jurusan" id="jurusan">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="email">Email</label>
                </td>
                <td>
                    <input type="text" name="email" id="email">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="gambar">Gambar</label>
                </td>
                <td>
                    <input type="text" name="gambar" id="gambar">
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit" name="submit">Tambah Data</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>