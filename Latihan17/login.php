<?php
    session_start();
    require "function.php";

    // cek cookie
    if ( isset($_COOKIE["id"]) && isset($_COOKIE["key"]) ) {
        $cookie_id = $_COOKIE["id"];
        $cookie_key = $_COOKIE["key"];

        $result = mysqli_query($conn, "SELECT username FROM account WHERE id = $cookie_id");

        $the_key = mysqli_fetch_assoc($result);


        if ( $cookie_key == hash('sha256', $the_key["username"]) ) {
            $_SESSION["login"] = true;
        }
    }

    if ( isset($_SESSION["login"]) ) {
        header("location: index.php");
        exit;
    }
    

    if ( isset($_POST["login"]) ) {

        $username = $_POST["username"];
        $password = $_POST["password"];

        $result = mysqli_query($conn, "SELECT * FROM account WHERE username = '$username' ");

        // cek apakah username ada
        if (mysqli_num_rows($result) == 1 ) {

            // cek password
            $row = mysqli_fetch_assoc($result);

            // var_dump($row);
            // var_dump($password);
            // var_dump(password_verify($password,$row["password"]));
            // die;
            
            if (password_verify($password, $row["password"])) {

                $_SESSION["login"] = true;

                // cek ceklist remember me
                if ( isset($_POST["remember"]) ) {
                    // buat cookie
                    setcookie("id", $row["id"], time()+120);
                    setcookie("key", hash('sha256', $row["username"]), time()+120);
                }

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
                    <input type="checkbox" name="remember"> Remember Me
                </td>
            </tr>
            <tr>
                <td>
                    Tidak Punya akun? Silahkan <a href="register.php">Daftar</a>
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