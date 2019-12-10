<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Opdracht 7</title>
    <style> li{color: blue;text-decoration:underline;} </style>

</head>
<body>
<form action="" method="post">
    <input type="hidden" name="remove" value="0">
    <input type="text" name="boodschap"><br><br>
    <input type="submit" name="submit" value="Verstuur">
</form>

<?php
$servername = "127.0.0.1";
$username = "root";
$password = "root";
$dbname = "boodschappen";


// Create connection
$conn = new mysqli("127.0.0.1", $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection 123 failed: " . $conn->connect_error);
}
$boodschap = mysqli_real_escape_string($conn, $_POST['boodschap']);

$sql = "INSERT INTO product (boodschap) VALUES ('$boodschap')";
if(mysqli_query($conn, $sql)) {
    echo "Records added successfully.";
}

$conn->close();
?>

</body>
</html>

