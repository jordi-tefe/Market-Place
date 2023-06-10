<?php 
session_start();
session_unset();
session_destroy();

header("Location: index.php"); //update it my market.html later , !! very important 