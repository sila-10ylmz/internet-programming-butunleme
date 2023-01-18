<?php

$serverName = "localhost";
$username = "root";
$password = "";
$dbName = "okculuk";

$connection = new mysqli($serverName, $username, $password, $dbName);

if (!$connection) echo "baglanti basarisiz";
