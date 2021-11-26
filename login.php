<?php
session_start();
require 'function.php';

if (isset($_SESSION["login"])) {
    header("Location: ./");
}

if (isset($_POST["submit"])) {
    $username = mysqli_real_escape_string($dbConn, strtolower($_POST["username"]));
    $passwd = $_POST['passwd'];
    $result = mysqli_query($dbConn, "SELECT * FROM user_mhs WHERE username = 'rijalus'");
    $account = mysqli_fetch_assoc($result);

    // echo $account["username"];

    if ($username == $account["username"]) {
        if ($passwd == $account["passwd"]) {
            $_SESSION["login"] = true;

            header("Location: captcha/");
            exit;
        }
    }

    $pesan = true;
}

// echo $passwd;
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
    <form action="" method="post">
        <table>
            <tr>
                <td>
                    <label for="username">
                        Username
                    </label>
                </td>
                <td>
                    <input type="text" name="username" id="username" placeholder="Username">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="passwd">Password</label>
                </td>
                <td>
                    <input type="text" name="passwd" id="passwd" placeholder="Password">
                </td>
            </tr>
            <?php if (isset($pesan)) : ?>
                <tr>
                    <td colspan="2">
                        <?= "Username atau Password anda salah"; ?>
                    </td>
                </tr>
            <?php endif; ?>
            <tr>
                <td colspan="2">
                    <button type="submit" name="submit">Login</button>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>