<?php
$servername = "localhost";
$username = "root";
$password = "MOZs15jS!";
$dbNaam = "vakantiehuizen";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbNaam);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>