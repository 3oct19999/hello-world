<?php
$servername = "localhost";
$username = "root";
$password = "Siddhant@02";
$dbname = "anant";



if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email_login = $_POST["email"];
  $pass = addslashes($_POST["password"]);
}

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//encrypt password
$passhash = password_hash($pass, PASSWORD_BCRYPT);
//variables for insertion
$Post = "INSERT INTO users (name, email, password, verified) VALUES ('$name', '$email_login', '$passhash', '0')";
//variable for verifying
$verify = "SELECT email FROM users WHERE email =  '$email_login' ";
//verify
$result = mysqli_query($conn, $verify);

if (mysqli_num_rows($result) > 0) {
 echo "user already exists";
 }else{
$conn->query($Post);
session_start();
$_SESSION["email"] = $email;
$_SESSION["name"] = $name;
header("Location: logged_in.php");
 }

?>
