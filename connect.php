<?php
$dbConn = mysqli_connect('localhost', 'cal', '300800');

if (!$dbConn) {
    die("Koneksi Gagal : " . mysqli_connect_error());
}

echo "Berhasil Terkoneksi ke Database localhost";
