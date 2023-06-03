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
        <img src="https://www.nexusmalls.com/MallOfAmritsar/wp-content/uploads/2020/08/brandlogo_79-1.jpg" alt="Nykaa logo" />

        <div>
            <h1 class="pink">ADDRESS</h1>
            <p>fill your address</p>
            <p></p>
        </div>

        <div>
            <h1><a href="payment.html"> PAYMENT</a></h1>
            <p>finalize</p>
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
                <input id="ethio" placeholder="Select Country" type="text" name="ethio" />
                <input id="name" placeholder="Name" type="text" name="name" />
                <input id="mobile" placeholder="Phone Number" type="number" name="mobile" />
                <input id="code" placeholder="Postal Code" type="number" name="code" />
                <input id="address" placeholder="Address" type="text" name="address" />
                <span id="checkbox"><input class="check" type="checkbox" />
                    <label>Use this as my default Shipping Address</label>
                </span>
                <input id="submit" type="submit" name="submit" value="SHIP TO THIS ADDRESS" />
            </form>
        </div>

        <!-- container3 -->
        <div id="container3">
            <div class="edit">
                <p>Items in your Bag</p>
                <p>
                    <a href="/Unit-2-Nykaa-collab/Unit-2-Nykaa-collab/cart/cart.html">
                        Edit</a>
                </p>
            </div>

            <!-- Grand total section -->
            <div id="total">
                <!-- append here -->

                <div class="cartsum1">
                    <p>Sub Total</p>
                    <p class="changing">0$</p>
                </div>
                <div class="flex1">
                    <p>Shipping Charge</p>
                    <p>Free</p>
                </div>
                <div class="flex2">
                    <p>Discount</p>
                    <p>0$</p>
                </div>
                <div class="flex3">
                    <p>Use Reward Points</p>
                    <a href="">APPLY</a>
                </div>
                <div class="cartsum2">
                    <p>Grand Total</p>
                    <p class="changing1">0$</p>
                </div>
            </div>
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