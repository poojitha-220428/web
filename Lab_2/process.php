<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = trim($_POST['username']);
    $email    = trim($_POST['email']);
    $password = trim($_POST['password']);
    $gender   = $_POST['gender'];
    $city     = $_POST['city'];

    // Validation
    if (empty($username) || empty($email) || empty($password) || empty($gender) || empty($city)) {
        echo "All fields are required!";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format!";
        exit;
    }

    if (strlen($password) < 6) {
        echo "Password must be at least 6 characters!";
        exit;
    }

    // If everything is valid
    echo "<h2>Form Submitted Successfully</h2>";
    echo "Name: $username <br>";
    echo "Email: $email <br>";
    echo "Gender: $gender <br>";
    echo "City: $city <br>";
}
?>