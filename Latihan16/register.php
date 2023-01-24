<?php
    session_start();
    // if (!isset($_SESSION["login"]) ) {
    //     header("location: login.php");
    //     exit;
    // }
    require "function.php";

    if ( isset($_POST["register"]) ) {

        if ( register($_POST) > 0 ) {
            echo "
                <script>
                    alert('Registrasi berhasil!');
                </script>
            ";
        } else {
            echo mysqli_error($conn);
        } 
        
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1>Register</h2>
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
            <p></p>
            <tr>
                <td>
                    <label for="password2">Confirm Password</label>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="password" name="password2" id="password2">
                </td>
            </tr>
            <tr>
                <td>
                    Sudah Punya akun? Silahkan <a href="login.php">Login</a>
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit" name="register">Register</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>