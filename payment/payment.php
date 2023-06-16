<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "market_database";


// Retrieve form data
$cardNumber = isset($_POST['cardNumber']) ? $_POST['cardNumber'] : '';
$expiryDate = isset($_POST['expiryDate']) ? $_POST['expiryDate'] : '';



$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and execute the SQL query
$stmt = $conn->prepare("INSERT INTO card_info (card_id, expiry) VALUES (?, ?)");
$stmt->bind_param("ss", $cardNumber, $expiryDate);
$stmt->execute();


//!      **************************  this needs some work  ***********************************
//!      enter another card-info table with auto increment to fix the issue 


if ($stmt->affected_rows > 0) {
    // Redirect to the success page
    header("Location: orderplaced.html");
}
// Redirect to an error page
header("Location: error.html");


// Close the database connection
$stmt->close();
$conn->close();
