<?php

    require "function.php";

    $id = $_GET["id"];

    if ( hapus($id) > 0 ) {
        echo "
            <script>
                alert('Data Berhasil di hapus');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data Gagal DI Hapus /n Mysqli_error($conn)');
                document.location.href = 'index.php';
            </script>
        ";
    }

?>