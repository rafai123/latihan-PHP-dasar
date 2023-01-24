<?php
    // Buat Koneksi
    $conn = Mysqli_connect("localhost", "root", "", "mahasiswa");

    function query($query) {
        global $conn;
        $rows = [];

        $result = Mysqli_query($conn, $query);

        while ($row = Mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        
    return $rows;
    }


    function tambah($data) {
        global $conn;
        // tangkap isi data
        $nim = $data["nim"];
        $nama = $data["nama"];
        $jurusan = $data["jurusan"];
        $email = $data["email"];
        $gambar = $data["gambar"];

          // query
        Mysqli_query($conn,"INSERT INTO biodata
                            VALUES
                            ('', '$nama', '$nim', '$jurusan', '$email', '$gambar') 
                            " );

    return Mysqli_affected_rows($conn);
    }

    function delete($id) {
        global $conn;

        Mysqli_query($conn, "DELETE FROM biodata WHERE id = $id");

    return Mysqli_affected_rows($conn);
    }

    function update($data) {
        global $conn;

        $id = $data["id"];
        $name =$data["nama"];
        $nim = $data["nim"];
        $major = $data["jurusan"];
        $email = $data["email"];
        $img = $data["gambar"];

        Mysqli_query($conn, "UPDATE biodata
                            SET 
                            
                            nama = '$name',
                            nim = '$nim',
                            jurusan = '$major',
                            email = '$email',
                            gambar = '$img'
                            WHERE id = $id
                            ");

    return Mysqli_affected_rows($conn);
    }

    function search($keyword) {
        global $conn;

        $rows = [];

        $result = Mysqli_query($conn, "SELECT * FROM biodata
                                WHERE
                                nama LIKE '%$keyword%' OR
                                nim LIKE '%$keyword%' OR
                                jurusan LIKE '%$keyword' OR
                                email LIKE '%$keyword%'
                                ");
        while ( $row = Mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }
?>