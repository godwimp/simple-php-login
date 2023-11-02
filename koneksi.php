<?php
    $server = 'localhost';
    $username = 'root';
    $password = '123456';
    $database = 'db_tugas';
    $port = '3307';

    $con = mysqli_connect($server, $username, $password, $database, $port);

    if(mysqli_connect_errno()){
        die("Koneksi Gagal: " . mysqli_connect_error());
    }
?>