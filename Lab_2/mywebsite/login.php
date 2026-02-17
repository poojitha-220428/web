<!DOCTYPE html>
<html>
<body>

<h2>Login</h2>

<form method="post">
    Username: <input type="text" name="username" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    <button type="submit">Login</button>
</form>

<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users 
            WHERE username='$username' AND password='$password'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        echo "Login successful";
    } else {
        echo "Invalid username or password";
    }
}
?>

</body>
</html>