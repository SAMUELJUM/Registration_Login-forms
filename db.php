<?php
$host = 'localhost';
$db = 'user_auth';
$user = 'root'; // Change this to your database username
$pass = '';     // Change this to your database password

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>
