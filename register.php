<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if (!empty($username) && !empty($email) && !empty($password)) {
    
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        
        $sql = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";
        $stmt = $pdo->prepare($sql);

        try {
            $stmt->execute([
                ':username' => $username,
                ':email' => $email,
                ':password' => $hashedPassword,
            ]);
          echo "Congratulations!! Please: <a href='login.php'>Login here</a>";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
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
    <title>Register</title>
    <link rel="stylesheet" href="styles.css">

</head>
<body>
    
   
    <form method="POST">
    <h3>Register now</h3>
        
        <input type="text" name="username" required placeholder="Enter Your Name">
        <br>
        
        <input type="email" name="email" required placeholder="Enter Your Email">
        <br>
        
        <input type="password" name="password" required placeholder="Enter Your Password">
        <br>
        <input type="password" name="Repeat Password" required placeholder="Confirm Your Password">
        <br>
        <button type="submit">Register</button>
        <p>Already Have an Account? <a href="login.php"><br>Login</a></p>
    </form>
</body>
</html>
