<!doctype html>
<html>
<head>
    <title>Opdracht 4</title>
    <style>

    </style>
</head>
<body>
<form action="" method="post">
    <input type="text" name="boodschap"><br><br>
    <input type="submit" name="submit" value="Verstuur">
</form>
    <?php session_start(); ?>
    <ul>
        <?php
        if (!empty($_POST['submit'])) {

            $_SESSION['boodschappen'][] = $_POST['boodschap'];

            foreach ($_SESSION['boodschappen'] as $boodschap) {
                echo "<li>".$boodschap."</li>";
            }
        } else {
            $_SESSION['boodschappen'] = [];
        }
        ?>
</ul>
</body>
</html>
