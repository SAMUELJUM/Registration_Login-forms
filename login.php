<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if (!empty($email) && !empty($password)) {
        
        $sql = "SELECT * FROM users WHERE email = :email";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':email' => $email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            echo "Login successful. Welcome, " . htmlspecialchars($user['username']) . "!";
        } else {
            echo "Invalid email or password.";
        }
    } else {
        echo "All fields are required.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
    
</head>
<body>
    
    <form method="POST">
    <h3>Login now</h3>
        
        <input type="email" name="email" required placeholder="Please Enter your Email">
        <br>
        
        <input type="password" name="password" required placeholder="Enter Your Password">
        <br>
        <button type="submit">Login</button>
        <p>Forgot your password? <a href="forgot_password.php"> <br>Click Here</a></p>
        <p>Don't have an Account? <a href="register.php"><br>Register</a></p>
    
    </form>
</body>
</html>
