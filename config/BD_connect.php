<?php
$servername = "localhost";
$database = "wikidb";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

session_start();
?>