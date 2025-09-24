<?php
include 'db.php'; // database connect

if (isset($_GET['id'])) { // URL থেকে id নেয়
    $id = $_GET['id'];
    $sql = "DELETE FROM user WHERE ID=$id"; // SQL delete query

    if ($conn->query($sql) === TRUE) {
        echo "✅ Record deleted successfully!";
    } else {
        echo "❌ Error deleting record: " . $conn->error;
    }
}

$conn->close();
?>
<br><a href="fetch.php">Back to Users</a>
