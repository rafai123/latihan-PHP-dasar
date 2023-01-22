<?php 
    function salam($waktu, $nama){
        if ( $waktu >= 03 && $waktu <= 10 ) return "Selamat pagi, $nama";
        if ( $waktu >= 11 && $waktu <= 14 ) return "Selamat siang, $nama";
        if ( $waktu >= 15 && $waktu <= 18 ) return "Selamat sore, $nama";
        if ( $waktu >= 19 && $waktu <= 02) return "Selamat malam, $nama";       
    };
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salam</title>
</head>
<body>
    <h1><?php echo salam(idate("H"), "Muhammad Rafai"); ?></h1>
    <h1><?php echo var_dump(idate("H")); ?></h1>
</body>
</html>