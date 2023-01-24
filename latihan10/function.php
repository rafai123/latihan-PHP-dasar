<?php

    $conn = mysqli_connect("localhost", "root", "", "mahasiswa");

    function query($query, $conn) {
        $rows = [];
        $result = Mysqli_query($conn, $query);
        while ( $row = Mysqli_fetch_assoc($result) ) {
            $rows[] = $row;
        }
        return $rows;
    }


    function tambah($conn, $data) {
        // Ambil data 
        // $id = $data["id"];
        $nama = $data["nama"];
        $nim = $data["nim"];
        $jurusan = $data["jurusan"];
        $email = $data["email"];
        $gambar = $data["gambar"];

        $result = Mysqli_query($conn, "INSERT INTO biodata
                                VALUES
                                ('', '$nama', '$nim', '$jurusan', '$email', '$gambar')
        ");
    
    return mysqli_affected_rows($conn);
    }



    function hapus($id) {
        global $conn;
        Mysqli_query($conn, "DELETE FROM biodata WHERE id = $id") ;

        return Mysqli_affected_rows($conn);
    }
?>