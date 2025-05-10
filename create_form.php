<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Task</title>
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

        .form-group {
            margin-bottom: 20px;
        }

        .form-control {
            background-color: #495057; /* Dark gray background color for form controls */
            color: #ffffff; /* White text color for form controls */
        }

        .btn-primary {
            background-color: #007bff; /* Blue primary button color */
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Add Task</h2>
        <form method="post" action="create_process.php">
            <div class="form-group">
                <label>Task:</label>
                <input type="text" name="task" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Due Date:</label>
                <input type="date" name="due" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Priority:</label>
                <select name="priority" class="form-control">
                    <option value="Low">Low</option>
                    <option value="Medium">Medium</option>
                    <option value="High">High</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Add Task</button>
        </form>
        <a href="index.php" class="btn btn-info">Back to Task List</a>
    </div>
</body>

</html>
