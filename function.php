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
// Show All Tables
function showTable($query)
{
    global $dbConn;

    $result = mysqli_query($dbConn, $query);
    $row = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}


// Show Rows
function dataMHS($table, $col, $value)
{
    global $dbConn;

    $query = "SELECT * FROM $table WHERE `$col` = '$value'";
    $run_query = mysqli_query($dbConn, $query);
    $show = mysqli_fetch_assoc($run_query);

    return $show;
}
