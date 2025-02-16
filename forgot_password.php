<?php
if (isset($_POST['submit'])) {
    $email = $_POST['email'];

    
    if (!empty($email)) {
        echo "<h3>An email to reset your password has been sent to $email.</h3>";
        
    } else {
        echo "<p>Please enter your email address.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #787b73;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }
        input[type="email"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
        }
        input[type="submit"] {
            background-color: crimson;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: crimson;
        }
        form a:hover {
    text-decoration: underline;
    background-color: crimson;
    
}

    </style>
</head>
<body>

    <div class="form-container">
        <h2>Forgot Password?</h2>
        <form action="forgot_password.php" method="POST">
            <label for="email">Enter Your Email Address</label>
            <input type="email" name="email" id="email" placeholder="xyz@example.com" required>

            <input type="submit" name="submit" value="Reset Password">
            <br>
            <p>You can now login <a href="login.php"><br>Login</a></p>
        </form>
    </div>
</body>
</html>
