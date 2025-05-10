<?php include 'header.php'; ?>

<body>
    <div class="container">
        <h1>Tasks</h1>
        <!-- Form for filtering tasks by date and priority -->
        <form method="get" action="index.php" class="form-inline mb-2">
            <div class="form-group mr-2">
                <label for="filterDate" class="text-white mr-2">Filter by Date:</label>
                <input type="date" name="filter_date" id="filterDate" class="form-control" value="<?php echo isset($_GET['filter_date']) ? $_GET['filter_date'] : ''; ?>">
            </div>
            <div class="form-group mr-2">
                <label for="filterPriority" class="text-white mr-2">Filter by Priority:</label>
                <select name="filter_priority" id="filterPriority" class="form-control">
                    <option value="">All Priorities</option>
                    <option value="High" <?php echo (isset($_GET['filter_priority']) && $_GET['filter_priority'] === 'High') ? 'selected' : ''; ?>>High</option>
                    <option value="Medium" <?php echo (isset($_GET['filter_priority']) && $_GET['filter_priority'] === 'Medium') ? 'selected' : ''; ?>>Medium</option>
                    <option value="Low" <?php echo (isset($_GET['filter_priority']) && $_GET['filter_priority'] === 'Low') ? 'selected' : ''; ?>>Low</option>
                </select>
            </div>
            <button type="submit" class="btn btn-info">Apply Filter</button>
        </form>

        <div class="card">
            <div class="card-body">
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Task</th>
                            <th>Due Date</th>
                            <th>Priority</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'read.php'; // Include PHP script to read tasks
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <a href="create_form.php" class="btn btn-danger btn-add-task">Add Upcoming Task</a>
        <a href="logout.php" class="btn btn-danger btn-logout">Logout</a>
    </div>
</body>

</html>
