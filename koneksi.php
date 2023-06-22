<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'dbsinauo';

$connect = new mysqli($hostname, $username, $password, $database);

if ($connect->connect_errno) {
    echo "Koneksi ke MySQL gagal: " . $connect->connect_error;
    exit();
}