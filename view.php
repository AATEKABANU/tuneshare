<?php session_start(); ?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Take A Look </title>
</head>

<body>
    <h3> Aateka's lab 8 </h3>
    <?php
    if (isset($_SESSION['name'])) {
        echo "<p> Hello " . $_SESSION['name'] . "!";
    } else {
        echo "<p> Hello! ";
    }
    ?>
    <a href="destroy.php"> Forget Me ! </a>
</body>

</html>
