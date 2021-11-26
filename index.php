<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'function.php';

if (isset($_SESSION["captcha"]) == False) {
    header("Location: captcha/");
    exit;
}



?>

<html>
<form action="proses-validasi.php" method="post">
    <table border="0">
        <tr>
            <td>
                <label for="nama">Nama</label>
            </td>
            <td> : </td>
            <td>
                <input type="text" name="nama" id="nama">
            </td>
        </tr>
        <tr>
            <td>
                <label for="nim">NIM</label>
            </td>
            <td> : </td>
            <td>
                <input type="text" name="nim" id="nim">
            </td>
        </tr>
        <tr>
            <td>
                <label for="tmp-lahir">Tempat Lahir</label>
            </td>
            <td> : </td>
            <td>
                <input type="text" name="tmp-lahir" id="tmp-lahir">
            </td>
        </tr>
    </table>

    <button name="Submit" value="Submit">
        Tambah Person
    </button>
</form>

</html>