<?php
session_start();

if (isset($_SESSION['password']) && isset($_SESSION['email'])) {

?>
     <!DOCTYPE html>
     <html>

     <head>
          <title>HOME</title>
          <link rel="stylesheet" type="text/css" href="style.css">
     </head>

     <body>
          <h1>Welcome Mr, <?php echo $_SESSION['firstname']; ?></h1>
          <!-- add the necessary links when finalizing -->

          <a href="products.html">See products</a><br>
          <div class="place-a"><a href="logout.php" class="logout">Logout</a></div>
          
     </body>

     </html>

<?php
} else {
     header("Location: index.php");
     exit();
}
?>