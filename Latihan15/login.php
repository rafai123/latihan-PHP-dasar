<?php
    require "function.php";

    if ( isset($_POST["login"]) ) {

        $username = $_POST["username"];
        $password = $_POST["password"];

        $result = mysqli_query($conn, "SELECT * FROM account WHERE username = '$username' ");

        // cek apakah username ada
        if (mysqli_num_rows($result) == 1 ) {

            // cek password
            $row = mysqli_fetch_assoc($result);
            
            if (password_verify($password, $row["password"])) {
                header("location: index.php");
                exit;
            }
        }

        $error = true;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <?php if (isset($error)) : ?>
        <h2 style="color : red;">Username atau Password Salah!!!</h2>
    <?php endif;?>
    <form action="" method="POST">
        <table>
            <tr>
                <td>
                    <label for="username">Username</label>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="username" id="username">
                </td>
            </tr>
            <p></p>
            <tr>
                <td>
                    <label for="password">Password</label>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="password" name="password" id="password">
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit" name="login">Login</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>