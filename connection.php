<?php
 session_start();


        $servername = "localhost";
        $username =  "root";
        $password = "temitope";
        $dbname = "sturdy_db";
                
//connection the connection
$conn = new mysqli($servername, $username, $password,$dbname);


if ($conn->connect_error) {
  die("connection failed: " .$conn->connect_error);
} 

date_default_timezone_set('Africa/Lagos');
$dreg= date('M j, Y h:i a', time());

$dkode=rand(1, 99999);
?>