<?php
/**
 * Created by PhpStorm.
 * User: Jhoseph
 * Date: 25/03/2017
 * Time: 21:05
 */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inmobiliaria";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}