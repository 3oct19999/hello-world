<?php
$servername = "localhost";
$username = "root";
$password = "Siddhant@02";
$dbname = "anant";

session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $reflection = $_POST["self_reflection"];
}

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$Post = "INSERT INTO reflection (reflection, user_id) VALUES ('$reflection', '{$_SESSION["id"]}')";

if($conn->query($Post)){
echo "succesfiul";
}else {

echo"shit";
}
?>
