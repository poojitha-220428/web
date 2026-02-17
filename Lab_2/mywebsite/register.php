<!DOCTYPE html>
<html>
<body>

<h2>Register</h2>

<form method="post">
    Username: <input type="text" name="username" required><br><br>
    Email: <input type="email" name="email" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    <button type="submit">Register</button>
</form>

<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $email    = $_POST['email'];
    $password = $_POST['password'];   // plain text (ok for lab)

    $sql = "INSERT INTO users (username, email, password)
            VALUES ('$username', '$email', '$password')";

    if (mysqli_query($conn, $sql)) {
        echo "Registered successfully";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

</body>
</html>