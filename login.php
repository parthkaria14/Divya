<?php
session_start();

// Database connection
$servername = "localhost";
$username = "username"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$database = "divya"; // Replace with your database name

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $pass = $_POST["pass"];

    // Check if user exists in database
    $sql = "SELECT * FROM users WHERE name='$name' AND pass='$pass'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User found, redirect to dashboard or home page
        $_SESSION["name"] = $name;
        header("Location: blog.html"); // Redirect to dashboard page
    } else {
        // User not found, display error message or redirect to login page with error message
        echo "Invalid username or password. Please try again.";
    }
}

$sql = "SELECT * FROM ruser WHERE name='$name' AND pass='$pass'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Redirect to recruiter page
    $_SESSION["name"] = $name;
    header("Location: recruitment.html"); // Redirect to recruiter page
    exit();
} 

$conn->close();
?>
