<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $login_sql = "SELECT user_id, password FROM user WHERE username = '$username'";
    $login_result = $conn->query($login_sql);

    if ($login_result->num_rows > 0) {
        $row = $login_result->fetch_assoc();
        $hashedPassword = $row['password'];

        if (password_verify($password, $hashedPassword)) {
            session_start();
            $_SESSION['user_id'] = $row['user_id'];
            header("location:index.php");
        } else {
            echo "<script>alert('Invalid password. Please try again.');</script>";
            echo "<script>window.location.href = 'login.php';</script>";
        }
    } else {
        echo "<script>alert('User not found. Please register before logging in.');</script>";
        echo "<script>window.location.href = 'login.php';</script>";
    }

    $conn->close();
} else {
    header("location:login.php");
}
?>
