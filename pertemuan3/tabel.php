<?php 
    require "function.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php tabel</title>
    <style>
        .red {
            background-color: crimson;
        }

        .blue {
            background-color: skyblue;
        }

        .yellow {
            background-color: yellow;
        }
    </style>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for ($baris = 1; $baris <= 5; $baris++ ) : ?>
            <?php $class = warna($baris); ?> 
            <tr class="<?php echo $class; ?>">
                <?php for ($kolom = 1; $kolom <= 5; $kolom++) : ?>
                    <td>
                        <?php 
                            echo $baris .",". $kolom;
                        ?>
                    </td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>