<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'function.php';

if (isset($_SESSION["captcha"]) === 0) {
    header("Location: captcha/");
    exit;
}

?>

<html>
<form action="proses-validasi.php" method="post">
    <table border="0">
        <tr>
            <td>
                <label for="tmp-lahir">Tempat Lahir</label>
            </td>
            <td> : </td>
            <td>
                <input type="date" name="tgl-lahir" id="tgl-lahir">
            </td>
        </tr>
        <?php if (isset($_SESSION["validasi"])) : ?>
            <tr>
                <td colspan="3">
                    <?= "Tanggal yang anda masukkan salah"; ?>
                </td>
            </tr>
        <?php endif; ?>
    </table>

    <button name="Submit" value="Submit">
        Cek Jawaban
    </button>
</form>

</html>