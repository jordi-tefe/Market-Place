<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Define the valid user credentials
$validUsers = array(
    array('email' => 'khalidkhelil19@gmail.com', 'password' => '123'),
    array('email' => 'khalidkhelil29@gmail.com', 'password' => '123')
);

$email = '';
$password = '';
$errorMessage = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve user input from the login form
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    // Check if the provided credentials match any valid user
    foreach ($validUsers as $user) {
        if ($user['email'] === $email && $user['password'] === $password) {
            header('Location: products.html');
            exit();
        }
    }

    // Invalid credentials
    $errorMessage = "Invalid email or password!";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <title>Login</title>
    <style>
        /* CSS styles */
    </style>
</head>

<body>
    <form class="form_container" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <!-- Form content -->

        <div class="input_container">
            <label class="input_label" for="email_field">Email</label>
            <p class="icon-holder">
                <i class="fa fa-envelope" aria-hidden="true"></i>
            </p>
            <input placeholder="name@example.com" name="email" type="text" class="input_field" id="email_field" value="<?php echo htmlspecialchars($email); ?>" required />
        </div>
        <div class="input_container">
            <label class="input_label" for="password_field">Password</label>
            <p class="icon-holder"><i class="fa fa-key" aria-hidden="true"></i></p>
            <input placeholder="Password" name="password" type="password" class="input_field" id="password_field" value="<?php echo htmlspecialchars($password); ?>" required />
        </div>
        <button title="Sign In" type="submit" class="sign-in_btn">
            <span>Sign In</span>
        </button>

        <?php if ($errorMessage) : ?>
            <p><?php echo $errorMessage; ?></p>
        <?php endif; ?>
    </form>
</body>

</html>