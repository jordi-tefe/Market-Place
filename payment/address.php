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


if (isset($_POST['submit'])) {
    // Process form data
    $country = $_POST["ethio"];
    $fname = $_POST["name"];
    $number = $_POST["mobile"];
    $code = $_POST["code"];
    $address = $_POST["address"];

    // Comment: Column names in the SQL query are incorrect
    // Use the correct column names: country, names, phone_number, code, addresses
    $sql = "INSERT INTO addresses (country, names, phone_number, code, addresses)
        VALUES ('$country', '$fname', '$number', '$code', '$address')";
    $conn->query($sql);



    if ($conn->affected_rows > 0) {
        // Redirect to the success page
        header("Location: place.html");
    } else {
        // Redirect to an error page
        header("Location: error.html");
    }
}





$conn->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Address</title>
    <link rel="icon" href="//www.nykaa.com/media/favicon/default/nykaa_favicon_a.png" type="image/x-icon" />
    <link rel="stylesheet" href="address.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&family=Roboto+Condensed&display=swap" rel="stylesheet" />

    <script src="address.js"></script>
</head>

<body>
    <!-- navbar -->
    <nav id="navbar">
        <div class="logo-container" style="position: fixed;"><a href="#"><img src="../image/logo.jpg" style="z-index: 1000; border-radius: 50%; width: 75px; margin: 5px;" alt="logo"></a> </div>&nbsp;

        <div>
            <h1 class="pink">ADDRESS</h1>
            <p>fill your address</p>
            <p></p>
        </div>

    </nav>
    <!-- container below navbar -->
    <div id="container">
        <!-- container1 -->
        <div id="container1">
            <p>New Address</p>
        </div>

        <!-- container2 -->
        <div id="container2">
            <form id="form" method="post" action="address.php">
                <label>New Address</label>
                <input id="ethio" placeholder="Select Country" type="text" name="ethio" required />
                <input id="name" placeholder="Name" type="text" name="name" required />
                <input id="mobile" placeholder="Phone Number" type="number" name="mobile" required />
                <input id="code" placeholder="Postal Code" type="number" name="code" required />
                <input id="address" placeholder="Address" type="text" name="address" required />
                <span id="checkbox"><input class="check" type="checkbox" />
                    <label>Use this as my default Shipping Address</label>
                </span>
                <input id="submit" type="submit" name="submit" value="SHIP TO THIS ADDRESS" />
            </form>
        </div>

        <!-- container3 -->
        <div id="container3" style="background-color: transparent; border:none;">

            <!-- Grand total section -->

        </div>
    </div>
    <!-- page footer -->
    <div id="footer">
        <div>
            <div>
                <img src="linkimgs/genuineproducts.png" alt="" />
            </div>
            <div>
                <p><b>GENUINE PRODUCTS</b></p>
                <p>Sourced Directly From Brands</p>
            </div>
        </div>
        <div>
            <div>
                <img src="linkimgs/delivery.png" alt="" />
            </div>
            <div>
                <p><b>FREE SHIPPING</b></p>
                <p>For Orders Above $499</p>
            </div>
        </div>
    </div>
    <!--footer end-->
</body>

</html>