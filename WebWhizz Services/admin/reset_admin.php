<?php
include '../db.php';

// The credentials you want to set
$username = "admin";
$new_password = "password123";

// Generate the secure hash
$hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

// Check if user exists
$check = $conn->query("SELECT * FROM admin_users WHERE username = '$username'");

if ($check->num_rows > 0) {
    // Update existing user
    $sql = "UPDATE admin_users SET password = '$hashed_password' WHERE username = '$username'";
    if ($conn->query($sql) === TRUE) {
        echo "<h1 style='color: green;'>Success!</h1>";
        echo "<p>Password for user <b>$username</b> has been reset to: <b>$new_password</b></p>";
        echo "<a href='login.php'>Go to Login</a>";
    } else {
        echo "Error updating record: " . $conn->error;
    }
} else {
    // Create new user if not exists
    $sql = "INSERT INTO admin_users (username, password) VALUES ('$username', '$hashed_password')";
    if ($conn->query($sql) === TRUE) {
        echo "<h1 style='color: green;'>Success!</h1>";
        echo "<p>New user <b>$username</b> created with password: <b>$new_password</b></p>";
        echo "<a href='login.php'>Go to Login</a>";
    } else {
        echo "Error creating record: " . $conn->error;
    }
}
?>