
<?php
session_start();
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "alumni";

// establishing connection with the server by passing servername, username, password and database name as the peremeters
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

date_default_timezone_set('Africa/Lagos');
$dreg = date('M j, Y h:i a', time());

$dkode = rand(10000, 99999);

?>