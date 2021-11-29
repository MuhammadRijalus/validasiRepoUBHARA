<?php
session_start();
require "function.php";

$tgl_lahir = $_POST["tgl-lahir"];

$data_mhs = dataMHS("data_mhs", "nama-panggilan", $_SESSION["username"]);
// echo $data_mhs["nama"]; 

// CEK VALIDASI USER
if ($tgl_lahir == $data_mhs["tgl-lahir"]) {
    $_SESSION["validasi"] = 1;
    header("Location: ./");
} else if ($tgl_lahir != $data_mhs["tgl-lahir"]) {
    $_SESSION["validasi"] = 0;
    header("Location: validasi.php");
    // echo "jawaban salah";
}
