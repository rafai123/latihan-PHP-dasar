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

        $gambar = upload();

        // jika function gambar menghasilkan false, maka gagal tambah data
        if ($gambar == false) {
            return false;
        }

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

        if ( $_FILES["gambar"]["error"] === 4) {
            $img = $data["gambar"];
        } else {
            $img = upload();
        }

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

    function upload() {
        $name = $_FILES["gambar"]["name"];
        $tmp_name = $_FILES["gambar"]["tmp_name"];
        $error = $_FILES["gambar"]["error"];
        $size = $_FILES["gambar"]["size"];

        // cek apakah file sudah di masukkan
        if ( $error === 4 ) {
            echo "
                <script>
                    alert('Silahkan Masukkan Gambar');
                </script>
            ";
            return false;
        }

        // cek apakah extensi file adalah gambar
        $valid_extension = ["jpg", "jpeg", "png", "gif"];
        $explode_name = explode(".", $name);
        $image_extension = strtolower(end($explode_name));

        if (!in_array($image_extension,$valid_extension)) {
            echo "
                <script>
                    alert('File yang anda upload bukan gambar!');
                </script>
            ";
            return false;
        }
        // var_dump($image_extension); die;

        // buat nama file menjadi id unik
        $new_file_name = uniqid();
        $new_file_name .= "_";
        $new_file_name .= $explode_name[0];
        $new_file_name .= ".";
        $new_file_name .= $image_extension;
        // jika file sudah memenuhi syarat, maka lakukan upload
        move_uploaded_file($tmp_name, "img/" . $new_file_name);

        return $new_file_name;
        
    }


    function register($data) {
        
        global $conn;

        $username = strtolower(stripslashes($data["username"]));
        $password = mysqli_real_escape_string($conn, $data["password"]);
        $re_password = mysqli_real_escape_string($conn, $data["password2"]);

        // cek apakah username sudah terdaftar
        $result = mysqli_query($conn, "SELECT username FROM account WHERE username = '$username'");
        
        if ( mysqli_fetch_assoc($result)) {
            echo "
                <script>
                    alert('Username Sudah Terdaftar!');
                </script>
            ";
            return false;
        }

        // cek apakah password atau username kosong
        if ( $password == "" || $username == "" ) {
            echo "
                <script>
                    alert('Silahkan Isi Data!');
                </script>
            ";
            return false;
        }

        // cek apakah konfirmasi password sama
        if ( $password !== $re_password) {
            echo "
                <script>
                    alert('password dan konfirmasi password tidak sama!');
                </script>
            ";
            return false;
        }

        // enkripsi Password
        $password = password_hash($password, PASSWORD_DEFAULT);
        
        // Registrasi ke database
        mysqli_query($conn, "INSERT INTO account VALUES ('', '$username', '$password')");

        return mysqli_affected_rows($conn);
    }
?>