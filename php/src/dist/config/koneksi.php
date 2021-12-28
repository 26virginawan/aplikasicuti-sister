<?php
//error_reporting(0);

$dbhost = '10.0.0.44';
$dbuser = 'admin';
$dbpass = 'Admin123_';
$dbname = 'db_cuti';

($conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)) or
    die('Tidak dapat terhubung ke database: ' . mysqli_error());
?>