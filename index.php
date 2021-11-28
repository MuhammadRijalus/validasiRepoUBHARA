<?php
session_start();
require 'function.php';

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}


if (isset($_SESSION["captcha"]) === 0) {
    header("Location: captcha/");
    exit;
}

if (isset($_SESSION["validasi"]) === 0) {
    header("Location: validasi.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ganti Password</title>
</head>

<body>
    <form action="">
        <table>
            <tr>
                <td>
                    <label for="ubah-passwd">Ganti Password</label>
                </td>
                <td>:</td>
                <td>
                    <input type="password" name="ubah-passwd" id="ubah-passwd" placeholder="Ubahlah Password Anda">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="confirm-passwd">Konfirmasi Password</label>
                </td>
                <td>:</td>
                <td>
                    <input type="passwwd" name="confirm-passwd" id="ubah-passwd" placeholder="Konfirmasi Password Anda">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>