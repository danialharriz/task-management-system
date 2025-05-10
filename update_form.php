<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Task</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #343a40; /* Dark gray background color */
            color: #ffffff; /* White text color */
        }

        h2 {
            text-align: center;
            color: #ffffff; /* White text color */
        }

        @font-face {
            font-family: 'PixCon';
            src: url('pixcon/PixCon.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        body {
            font-family: 'PixCon', sans-serif;
        }

        .container {
            margin-top: 50px;
        }

        .form-group label {
            color: #ffffff; /* White text color for labels */
        }

        .form-control {
            background-color: #495057; /* Dark gray background color for form controls */
            color: #ffffff; /* White text color for form controls */
        }

        .btn-primary {
            background-color: #007bff; /* Blue primary button color */
            border-color: #007bff; /* Blue primary button border color */
        }

        .btn-primary:hover {
            background-color: #0056b3; /* Darker blue on hover */
            border-color: #0056b3;
        }

        .btn-back {
            margin-top: 15px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Edit Task</h2>
        <?php
        include 'db.php';

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $sql = "SELECT * FROM task WHERE task_id=$id";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                ?>
                <form method="post" action="update_process.php">
                    <input type="hidden" name="id" value="<?php echo $row['task_id'];?>">
                    <div class="form-group">
                        <label>Task</label>
                        <input type="text" name="task" required="" class="form-control" value="<?php echo $row['task_desc'];?>">
                    </div>
                    <div class="form-group">
                        <label>Due Date</label>
                        <input type="date" name="due" required="" class="form-control" value="<?php echo $row['task_due'];?>">
                    </div>
                    <div class="form-group">
                        <label>Priority</label>
                        <select name="priority" class="form-control">
                            <option value="Low" <?php echo ($row['priority'] == 'Low') ? 'selected' : ''; ?>>Low</option>
                            <option value="Medium" <?php echo ($row['priority'] == 'Medium') ? 'selected' : ''; ?>>Medium</option>
                            <option value="High" <?php echo ($row['priority'] == 'High') ? 'selected' : ''; ?>>High</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Task</button>
                </form>
                <a href="index.php" class="btn btn-secondary btn-back">Back</a>
            <?php
            } else {
                echo "No task found";
            }
        } else {
            echo "Invalid request";
        }
        $conn->close();
        ?>
    </div>
</body>

</html>
