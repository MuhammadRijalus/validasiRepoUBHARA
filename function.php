<?php
// KONEKSI DATABASE
$dbConn = mysqli_connect(
    'localhost',
    'cal',
    '300800',
    'test'
);

if (!$dbConn) {
    die("Koneksi Gagal : " . mysqli_connect_error());
}

// echo "Berhasil Terkoneksi ke Database localhost";

// FUNCTION
function showTable($query) {
    global $dbConn;

    $result = mysqli_query($dbConn, $query);
    $row = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}