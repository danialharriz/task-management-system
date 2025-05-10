<?php
include 'db.php';
session_start();

$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;

if ($user_id) {
    $filterDate = isset($_GET['filter_date']) ? $_GET['filter_date'] : null;
    $filterPriority = isset($_GET['filter_priority']) ? $_GET['filter_priority'] : null;

    // Modify SQL query to include user_id condition
    $sql = "SELECT * FROM task WHERE user_id = '$user_id'";

    if ($filterDate) {
        $sql .= " AND task_due = '$filterDate'";
    }

    if ($filterPriority) {
        $sql .= " AND priority = '$filterPriority'";
    }

    $sql .= " ORDER BY task_id ASC";

    $results = $conn->query($sql);

    if ($results->num_rows > 0) {
        $taskNumber = 1;

        while ($row = $results->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $taskNumber . "</td>";
            echo "<td>" . $row['task_desc'] . "</td>";
            echo "<td>" . $row['task_due'] . "</td>";

            $priority = isset($row['priority']) ? $row['priority'] : 'N/A';
            echo "<td>" . $priority . "</td>";

            echo "<td>
                    <a href='update_form.php?id=" . $row['task_id'] . "' class='btn btn-success'>Edit Task </a>
                    <a href='delete.php?id=" . $row['task_id'] . "' class='btn btn-danger'> Finished </a>
                </td>";
            echo "</tr>";

            $taskNumber++;
        }
    } else {
        echo "No tasks found";
    }
} else {
    echo "User not logged in.";
}

$conn->close();
?>
