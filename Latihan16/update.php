<?php
    session_start();
    if ( !isset($_SESSION["login"]) ) {
        header("location: login.php");
        exit;
    }
    require "function.php";

    $id = $_GET["id"];
    $query = "SELECT * FROM biodata WHERE id = $id";
    $content = query($query)[0];

    var_dump($content);
    if ( isset($_POST["submit"]) ) {
        if ( update($_POST) > 0 ) {
            echo "
                <script>
                    alert('Data Berhasil Di Ubah');
                    document.location.href = 'index.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('Data gagal di tambahkan');
                    document.location.href = 'index.php';
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
    <title>Document</title>
</head>
<body>
    <h1>Update Data!</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <table  cellspacing="0" cellpadding="10">
            <input type="hidden" value="<?php echo $content["id"]?>" name="id">
            <input type="hidden" value="<?php echo $content["gambar"]?>" name="gambar">
            <tr>
                <td>
                    <label for="nama">Name : </label>
                </td>
                <td>
                    <input type="text" name="nama" id="nama" value="<?php echo $content["nama"]; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="nim">NIM : </label>
                </td>
                <td>
                    <input type="text" name="nim" id="nim" value="<?php echo $content["nim"]; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="jurusan">Major : </label>
                </td>
                <td>
                    <input type="text" name="jurusan" id="jurusan" value="<?php echo $content["jurusan"]; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="email">Email : </label>
                </td>
                <td>
                    <input type="text" name="email" id="email"value="<?php echo $content["email"]; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    Current image : 
                </td>
                <td>
                    <img src="img/<?php echo $content["gambar"] ?>" width="180px">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="gambar">Picture : </label> 
                </td>
                <td>
                    <input type="file" name="gambar" id="gambar" >
                </td>
            </tr>
            <tr>
                <td>
                    <button name="submit" type="submit">Update!</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>