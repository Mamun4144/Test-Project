<?php
error_reporting(E_ALL);
ini_set('display_errors', 1); // কোনো error দেখানোর জন্য

include 'db.php'; // database connect

if ($_SERVER["REQUEST_METHOD"] == "POST") { // form submit check
    $name = $_POST['name'];     // form থেকে name
    $email = $_POST['email'];   // form থেকে email
    $password = $_POST['password']; // form থেকে password

    $hashed = password_hash($password, PASSWORD_DEFAULT); // password encrypt করা

    // SQL query → data database-এ ঢোকানো
    $sql = "INSERT INTO users (Name, Email, Password) VALUES ('$name', '$email', '$hashed')";

    if ($conn->query($sql) === TRUE) { // execute query
        echo "✅ Data inserted successfully!";
        echo "<br><a href='fetch.php'>View Users</a>";
    } else {
        echo "❌ Error: " . $conn->error;
    }
}

$conn->close(); // connection close
?>


<!-- testing  -->