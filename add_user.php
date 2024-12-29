<?php
$host = "<RDS-endpoint>";
$username = "admin";
$password = "<your-password>";
$dbname = "interactive_db";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];

$stmt = $conn->prepare("INSERT INTO users (name, email) VALUES (?, ?)");
$stmt->bind_param("ss", $name, $email);
$stmt->execute();

header("Location: index.php");
?>