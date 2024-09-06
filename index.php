<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        .login-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .login-container input[type="text"], 
        .login-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .login-container input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        .login-container input[type="submit"]:hover {
            background-color: #218838;
        }
        .error-message {
            color: red;
            text-align: center;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2>Login</h2>

    <?php
    // Initialize variables
    $username = $password = "";
    $error_message = "";

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Capture the input values
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Example hardcoded credentials
        $valid_username = "admin";
        $valid_password = "password123";

        // Simple validation
        if ($username === $valid_username && $password === $valid_password) {
            echo "<p>Login successful! Welcome, $username.</p>";
        } else {
            $error_message = "Invalid username or password.";
        }
    }
    ?>

    <!-- Display error message if any -->
    <?php if (!empty($error_message)): ?>
        <div class="error-message"><?php echo $error_message; ?></div>
    <?php endif; ?>

    <!-- Login Form -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" value="Login">
    </form>
</div>

</body>
</html>
