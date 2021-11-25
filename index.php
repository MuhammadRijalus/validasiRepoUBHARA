<?php
session_start();

$angkaRandom = $_SESSION["kode"] . "";
if (isset($_POST["cek"])) {
    $userInput = $_POST["input-kode"];

    if ($userInput == $angkaRandom) {
        $pesan = "Selamat Benar!";
    }
}
$_SESSION["kode"] = rand(00000, 99999);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Re-Captcha Sek Kono</title>
    <style>
        div.kotak-captcha {
            padding: 0 20px 20px;
            max-width: fit-content;
            border: 1px solid #000;
        }
    </style>
</head>

<body>
    <div class="kotak-captcha">
        <h2>Re - Captcha</h2>
        <form action="" method="post">
            <table>
                <tr>
                    <td colspan="3" style="text-align: center; position: relative;">
                        <div style="width: fit-content; margin: auto;">
                            <?php
                            $huruf = str_split($_SESSION["kode"]);
                            for ($i = 0; $i < count($huruf); $i++) {
                                $rotate = rand(-40, 40);
                                echo "<span style = \"position: relative; transform: rotate(" . $rotate . "deg); display: inline-block;\">" . $huruf[$i] . "</span>";
                            }
                            ?>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="input-kode">Code</label>
                    </td>
                    <td>:</td>
                    <td>
                        <input type="text" name="input-kode" id="input-kode">
                    </td>
                </tr>
                <?php if (isset($pesan)) : ?>
                    <tr>
                        <td colspan="3">
                            <h3>
                                <?= $pesan; ?>
                            </h3>
                        </td>
                    </tr>
                <?php endif; ?>
                <tr>
                    <td style="text-align: center;" colspan="3">
                        <button type="submit" name="cek">Cek Kode</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>