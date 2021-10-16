<?php 
// show errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// get form params
$name = $_POST["n"];

// connect to database
$conn = mysqli_connect("localhost", "barbara_user", "Sm4aEEDol9fp", "barbara_base");

// sql
$sql = "INSERT INTO todo (name) VALUES ('$name')";
mysqli_query($conn, $sql);

// redirect to home
header('Location: /');