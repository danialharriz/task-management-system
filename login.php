<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
         @font-face {
            font-family: 'PixCon';
            src: url('pixcon/PixCon.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        body {
            background-image: url('background.avif'); /* Add your background image URL here */
            background-size: cover;
            background-position: center;
            height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ffffff; /* White text color */
            font-family: 'PixCon', sans-serif;
        }

        .container {
            background-color: rgba(52, 58, 64, 0.8); /* Dark gray semi-transparent background for the card */
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #ffffff; /* White text color */
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-control {
            background-color: #495057; /* Dark gray background color for form controls */
            color: #ffffff; /* White text color for form controls */
        }

        .btn-dark,
        .btn-info {
            width: 100%;
            margin-top: 10px;
        }

        .btn-info {
            margin-top: 10px;
        }

        .system-text {
            text-align: center;
            color: #ffffff;
            font-size: 14px;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Login</h2>
        <form method="post" action="login_process.php">
            <div class="form-group">
                <label>Username:</label>
                <input type="text" name="username" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Password:</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-dark">Login</button>
            <a href="register.php" class="btn btn-info">Register</a>
        </form>

        <div class="system-text">Task Management System by Harriz</div>
    </div>
</body>

</html>
