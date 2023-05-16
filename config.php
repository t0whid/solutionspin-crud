<?php
$host = "localhost";
$username = "root";
$password = "1234_Asdf";
$database = "solutionspin";

$mysqli = mysqli_connect($host, $username, $password, $database);

if (!$mysqli) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
