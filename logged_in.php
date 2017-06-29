<?php

session_start();


echo'
<html>
  <head>
    <title>Login | Anant</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script type="text/javascript" src="js/scrollreveal.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Patrick+Hand+SC" rel="stylesheet">
  </head>
  <body>
  <div class=""
<h1>Self Reflection </h1>
    <form action="reflection.php" method="post">
  <textarea name="self_reflection" rows="8" cols="80"></textarea><br>
  <input type="submit" name="send" value="Submit">
    </form>

    </body>
</html>
';
?>
