<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Opdracht 6</title>
    <style> li{color: blue;text-decoration:underline;} </style>

</head>
<body>
<form action="" method="post">
    <input type="hidden" name="remove" value="0">
    <input type="text" name="boodschap"><br><br>
    <input type="submit" name="submit" value="Verstuur">
</form>

<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "boodschappen";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$conn->close();
?>

</body>
</html>
