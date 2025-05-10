<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
    </style>
</head>
<body>
<div class="container">
        <h2>Register</h2>
        <form method="post" action="register_process.php">
            <div class="form-group">
                <label>Username:</label>
                <input type="text" name="username" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Password:</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Confirm Password:</label>
                <input type="password" name="confirm_password" id="confirm_password" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-dark">Register</button>
        </form>
    </div>

    <script>
        // JavaScript to validate password match
        document.getElementById("password").addEventListener("change", function() {
            var password = document.getElementById("password").value;
            var confirmPasswordInput = document.getElementById("confirm_password");
            var confirmPassword = confirmPasswordInput.value;

            if (password !== confirmPassword) {
                confirmPasswordInput.setCustomValidity("Passwords do not match");
            } else {
                confirmPasswordInput.setCustomValidity("");
            }
        });

        document.getElementById("confirm_password").addEventListener("change", function() {
            var password = document.getElementById("password").value;
            var confirmPassword = document.getElementById("confirm_password").value;

            if (password !== confirmPassword) {
                this.setCustomValidity("Passwords do not match");
            } else {
                this.setCustomValidity("");
            }
        });
    </script>
</body>
</html>
