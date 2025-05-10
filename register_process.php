<?php
include 'db.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirm_password"]; // Add this line to get the confirm password
    
    // Check if password and confirm password match
    if ($password !== $confirmPassword) {
        echo '<script>alert("Passwords do not match. Please try again."); window.location.href = "register.php";</script>';
        exit; // Stop execution if passwords don't match
    }
    
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $check_sql = "SELECT * FROM user WHERE username = '$username'";
    $check_result = $conn->query($check_sql);

    if ($check_result->num_rows > 0) {
        // Use JavaScript to show a pop-up alert
        echo '<script>alert("Username already exists. Please choose a different username."); window.location.href = "register.php";</script>';
    } else {
        $sql = "INSERT INTO user(username,password) VALUES('$username','$hashedPassword')";

        if ($conn->query($sql) === TRUE) {
            echo '<script>alert("Registration successful. You can now login."); window.location.href = "login.php";</script>';
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
}
?>
