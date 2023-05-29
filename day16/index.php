<?php

$host = "localhost";
$port = "3306";
$username = "root";
$password = "mysqldb";
$database = "shivapuri";

$connection = mysqli_connect($host.":".$port, $username, $password, $database);

if (!$connection) {
    echo "Not connected";
    die();
}

$qry = "SELECT * FROM student;";

$res = mysqli_query($connection, $qry);

if (mysqli_num_rows($res) > 0) {
    while ($data = mysqli_fetch_assoc($res)) {
        echo "<p>Name: ". $data["name"] ."</p>";
    }

}



?>