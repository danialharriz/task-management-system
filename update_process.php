<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $desc = $_POST['task'];
    $due = $_POST['due'];
    $priority = $_POST['priority'];

    // Update the task with the new priority field
    $sql = "UPDATE task SET task_desc = '$desc', task_due = '$due', priority = '$priority' WHERE task_id = $id";

    if ($conn->query($sql) === TRUE) {
        header("location: index.php");
    } else {
        echo "Error updating task: " . $conn->error;
    }

    $conn->close();
}
?>
