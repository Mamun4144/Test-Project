<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM user WHERE ID=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "UPDATE user SET Name='$name', Email='$email' WHERE ID=".$_POST['id'];

    if ($conn->query($sql) === TRUE) {
        echo "✅ Record updated!";
        echo "<br><a href='fetch.php'>Back to Users</a>";
        exit;
    } else {
        echo "❌ Error updating record: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>
    <h2>Edit User</h2>
    <form method="POST">
        <input type="hidden" name="id" value="<?php echo $row['ID']; ?>">
        Name: <input type="text" name="name" value="<?php echo $row['Name']; ?>"><br>
        Email: <input type="email" name="email" value="<?php echo $row['Email']; ?>"><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
<?php
include 'db.php'; // database connect

if (isset($_GET['id'])) { // URL থেকে id
    $id = $_GET['id'];
    $sql = "SELECT * FROM user WHERE ID=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") { // form submit check
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "UPDATE user SET Name='$name', Email='$email' WHERE ID=".$_POST['id'];

    if ($conn->query($sql) === TRUE) {
        echo "✅ Record updated!";
        echo "<br><a href='fetch.php'>Back to Users</a>";
        exit;
    } else {
        echo "❌ Error updating record: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>
    <h2>Edit User</h2>
    <form method="POST">
        <input type="hidden" name="id" value="<?php echo $row['ID']; ?>">
        Name: <input type="text" name="name" value="<?php echo $row['Name']; ?>"><br><br>
        Email: <input type="email" name="email" value="<?php echo $row['Email']; ?>"><br><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
