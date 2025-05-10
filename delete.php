<?php
include 'db.php';

session_start();
$user_id = $_SESSION['user_id'];

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $task_id = $_GET['id'];

    $sql = "DELETE FROM task WHERE task_id = '$task_id' AND user_id = '$user_id'";

    if ($conn->query($sql) === TRUE) {
        header("location:index.php");
    } else {
        echo "Error Deleting task: " . $conn->error;
    }

    $conn->close();
}
?>
