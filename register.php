<?php
// Establish a database connection (replace the placeholders with your actual credentials)
$host = "localhost";
$dbName = "market_database";
$username = "root";
$password = "";

// Create a new mysqli instance
$mysqli = new mysqli($host, $username, $password, $dbName);

// Check the connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare and execute the SQL query to insert the data into the "users" table
    $sql = "INSERT INTO users (firstname, lastname, email, password) VALUES ('$firstName', '$lastName', '$email', '$password')";

    if ($mysqli->query($sql) === true) {
        // Data inserted successfully
        echo "Thank You for joining the family!";
    } else {
        // Error occurred
        echo "Error: " . $mysqli->error;
    }
}

// Close the database connection
$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <style>
        body {
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }


        .form {
            display: flex;
            flex-direction: column;
            gap: 15px;
            margin-top: 50px;
            max-width: 450px;
            width: 400px;
            background-color: #fff;
            border-radius: 20px;
            position: relative;
            padding: 35px;
            box-shadow: 0px 106px 42px rgba(0, 0, 0, 0.01),
                0px 59px 36px rgba(0, 0, 0, 0.05), 0px 26px 26px rgba(0, 0, 0, 0.09),
                0px 7px 15px rgba(0, 0, 0, 0.1), 0px 0px 0px rgba(0, 0, 0, 0.1);
        }

        .title {
            font-size: 28px;
            color: royalblue;
            font-weight: 600;
            letter-spacing: 0px;
            position: relative;
            display: flex;
            align-items: center;
            margin-bottom: 2px;
            justify-content: center;

        }

        .title::before,
        .title::after {
            position: absolute;
            content: "";
            height: 16px;
            width: 16px;
            border-radius: 50%;
            background-color: royalblue;
            display: block;
            align-content: flex-start;
            right: calc(70% - 16px);
        }

        .title::before {
            width: 18px;
            height: 18px;
            background-color: royalblue;
        }

        .title::after {
            width: 18px;
            height: 18px;
            animation: pulse 1.5s linear infinite;
        }

        .message,
        .signin {
            color: rgba(88, 87, 87, 0.822);
            font-size: 14px;
        }

        .signin {
            text-align: center;
        }

        .signin a {
            color: royalblue;
            text-decoration: none;
            background-color: #e2eff0;
            border-radius: 3px;
        }

        .signin a:hover {
            text-decoration: underline royalblue;
        }

        .form label {
            position: relative;
        }

        .form label .input {
            width: 100%;
            padding: 10px 10px 20px 10px;
            outline: 0;
            border: 1px solid rgba(105, 105, 105, 0.397);
            border-radius: 10px;

        }

        .form label .input+span {
            position: absolute;
            left: 10px;
            top: 15px;
            color: grey;
            font-size: 0.9em;
            cursor: text;
            transition: 0.5s ease-in-out;
        }

        .form label .input:placeholder-shown+span {
            top: 15px;
            font-size: 0.9em;
        }

        .form label .input:focus+span,
        .form label .input:valid+span {
            top: 30px;
            font-size: 0.6em;
            font-weight: 600;
            opacity: .8;
        }

        .form label .input:valid+span {
            color: rgba(0, 128, 0, 0.681);
        }

        /*
.form label.error span {
  color: red;
}
*/
        .submit {

            border: none;
            outline: none;
            background-color: royalblue;
            padding: 10px;
            border-radius: 10px;
            color: #fff;
            font-size: 16px;
            transform: .3s ease-in-out;
        }

        .submit:hover {
            background-color: rgb(56, 90, 194);
        }

        @keyframes pulse {
            from {
                transform: scale(0.9);
                opacity: 1;
            }

            to {
                transform: scale(1.8);
                opacity: 0;
            }
        }
    </style>
</head>

<body>
    <form class="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <p class="title">Register </p>
        <p class="message">Sign up now and get full access to our app. </p>

        <label>
            <input required type="text" name="firstname" class="input">
            <span>First name</span>
        </label>

        <label>
            <input required type="text" name="lastname" class="input">
            <span>Last name</span>
        </label>

        <label>
            <input required type="email" name="email" class="input">
            <span>Email</span>
        </label>

        <label>
            <input required type="password" name="password" id="password" class="input">
            <span>Password</span>
        </label>

        <label>
            <input required type="password" id="confirm_password" class="input">
            <span class="error">Confirm password</span>
        </label>

        <button class="submit" type="submit">Sign Up</button>

        <p class="signin">Already have an account? <a href="Loginpage.html">Sign In</a> </p>
    </form>

    <script>
        // Get the password and confirm password input elements
        var passwordInput = document.getElementById("password");
        var confirmPasswordInput = document.getElementById("confirm_password");
        var submitButton = document.querySelector(".submit");
        var errorSpan = document.querySelector(".error");

        // Add an event listener to the confirm password input
        confirmPasswordInput.addEventListener("input", function() {
            // Check if the passwords match
            if (passwordInput.value !== confirmPasswordInput.value) {
                // If the passwords don't match, disable the button and show the error message
                submitButton.disabled = true;
                errorSpan.textContent = "Passwords should match";
                errorSpan.style.color = "red";
            } else {
                // If the passwords match, enable the button and reset the error message
                submitButton.disabled = false;
                errorSpan.textContent = "Confirm password";
                errorSpan.style.color = "";
            }
        });
    </script>
    <script>
        // Get the email input element and label
        var emailInput = document.querySelector('input[name="email"]');
        var emailLabel = document.querySelector('label[for="email"]');

        // Function to check if the email format is valid
        function isValidEmail(email) {
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailRegex.test(email);
        }

        // Add an event listener to the email input
        emailInput.addEventListener("input", function() {
            var email = emailInput.value;

            if (isValidEmail(email)) {
                // If the email format is valid, remove the red color from the label
                emailLabel.style.color = "";
            } else {
                // If the email format is invalid, set the label color to red
                emailLabel.style.color = "red";
            }
        });
    </script>




</body>

</html>