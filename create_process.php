<?php
include 'db.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    $task_desc = $_POST['task'];
    $task_due = $_POST['due'];
    $priority = $_POST['priority'];

    $sql = "INSERT INTO task (task_desc, task_due, priority, user_id) VALUES ('$task_desc', '$task_due', '$priority', '$user_id')";

    if ($conn->query($sql) === TRUE) {
        echo "Task added successfully.";
        header("location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {
    // Redirect to the login page if the user is not logged in
    header("location: login.php");
}
?>
