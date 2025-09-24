<?php
include 'db.php'; // database connect

$sql = "SELECT * FROM users"; // সব user select করা
$result = $conn->query($sql); // query execute
?>

<!DOCTYPE html>
<html>
<head>
    <title>All Users</title>
</head>
<body>
    <h2>All Users</h2>
    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>

        <?php
        if ($result->num_rows > 0) { // যদি data থাকে
            while($row = $result->fetch_assoc()) { // প্রতিটি row loop
                echo "<tr>";
                echo "<td>".$row['ID']."</td>";
                echo "<td>".$row['Name']."</td>";
                echo "<td>".$row['Email']."</td>";
                echo "<td><a href='update.php?id=".$row['ID']."'>Edit</a></td>";
                echo "<td><a href='delete.php?id=".$row['ID']."'>Delete</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No users found</td></tr>";
        }
        ?>
    </table>
    <br><a href="index.html">Add New User</a>
</body>
</html>

<?php $conn->close(); ?>
