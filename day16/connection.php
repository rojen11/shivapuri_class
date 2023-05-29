<?php
$host = "localhost";
$port = "3306";
$username = "root";
$password = "mysqldb";
$database = "shivapuri";

$conn = mysqli_connect($host.":".$port, $username, $password, $database);

if (!$conn) {
    echo "Not connected";
    die();
}
