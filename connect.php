<?php
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "tbb";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
$seinsatzName ="SELECT einsatzName, einsatzId FROM einsaetze";
$reinsatzName = $conn->query($seinsatzName);
?>