<?php
// Retrieve form data
$cardNumber = $_POST['cardNumber'];
$expiryDate = $_POST['expiryDate'];


// Validate and sanitize the data as per your requirements

// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "market_database";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and execute the SQL query
$stmt = $conn->prepare("INSERT INTO card_info (card_id, expiry) VALUES ($cardNumber, $expiryDate, $useDefaultAddress)");


// Check if the insertion was successful
if ($stmt->affected_rows > 0) {
    // Redirect to the success page
    header("Location: orderplaced.html");
} else {
    // Redirect to an error page
    header("Location: error.html");
}

// Close the database connection
$stmt->close();
$conn->close();
