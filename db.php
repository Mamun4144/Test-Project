<?php
$host = "localhost";  // এখানে port লিখতে হবে না
$user = "root";
$pass = ""; 
$dbname = "test_db";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
