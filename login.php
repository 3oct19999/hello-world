<?php
//Give server info
$servername = "localhost";
$username = "root";
$password = "Siddhant@02";
$dbname = "anant";


//Add the data from html form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST["email"];
  $passhash = $_POST["password"];
}

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//Select data
$Post = "SELECT id, name, email, password FROM users WHERE email =  '$email' /*AND verify = 1*/";
//Check if email exists
$result = mysqli_query($conn, $Post);
if(mysqli_num_rows($result) > 0){
$row = mysqli_fetch_assoc($result);
} else {
die("login failure");
}

//check if password is correct
if($passmain = password_verify($passhash, $row['password'])){
session_start();
$_SESSION["id"] = $row['id'];
$_SESSION["name"] = $row['name'];
$_SESSION["email"] = $row['email'];
header('location: logged_in.php');
  } else {
    echo "Login faliure";
    echo $passhash;
    echo $row['password'];
  }



?>
