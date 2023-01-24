<?php
    require "function.php";

    if ( delete($_GET["id"]) > 0 ) {
        echo "
            <script>
                alert('Data Berhasil Di Hapus');
                document.location.href ='index.php';
            </script>
        ";
    } else {
        $err = Mysqli_error($conn);
        echo "
            <script>
                alert('Data Gagal Di Hapus $err');
                document.location.href = 'index.php';
            </script>
        ";
    }
?>