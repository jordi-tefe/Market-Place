<?php
// Connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "market_database";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check for errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create table
$tableName = "address";
$sql = "CREATE TABLE IF NOT EXISTS $tableName (
    country INT(11) AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(50),
    phone_number VARCHAR(50),
    code VARCHAR(50),
    addresses VARCHAR(50)
)";
$conn->query($sql);

// Process form data
$country = $_POST["ethio"];
$fname = $_POST["name"];
$number = $_POST["mobile"];
$code = $_POST["code"];
$address = $_POST["address"];

// Insert record
$sql = "INSERT INTO $tableName (country, fname, phone_number, code, addresses)
        VALUES ('$country', '$fname', '$number', '$code', '$address')";
$conn->query($sql);

$conn->close();
?>
