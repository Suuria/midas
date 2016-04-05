<?php
/**
 * Created by PhpStorm.
 * User: alexander.naumann
 * Date: 26.02.2016
 * Time: 16:01
 */

$servername = "DBSEVER";
$username = "DBUSERNAME";
$password = "DBPASSWORD";
$database = "DATABASE";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

