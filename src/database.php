<?php

$con = new mysqli('localhost', 'root', '', 'bcm');
$con->set_charset("utf8");

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
echo "Connected successfully";