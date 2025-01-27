<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="paula_2logo.webp" type="image/x-icon">
    <title>Document</title>
</head>
<body>
    This is the home page <br>
    <a href="session.php">This goes to the login page</a> <br>
</body>
</html>
<?php
$_SESSION["username"] = "kiya";
$_SESSION["password"] = "kiya23";
echo $_SESSION["username"]."<br>";
echo $_SESSION["password"]."<br>";
?>