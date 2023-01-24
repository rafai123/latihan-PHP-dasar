<?php

    $conn = mysqli_connect("localhost", "root", "", "mahasiswa");

    function query($conn, $query) {
        global $conn;
        $rows = [];
        $result = mysqli_query($conn, $query);
        while ( $fetch = mysqli_fetch_assoc($result) ) {
            $rows[] = $fetch;
        }
        return $rows;
    }

?>