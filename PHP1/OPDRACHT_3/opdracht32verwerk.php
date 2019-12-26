<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulier</title>
</head>
<body>

<?php
    $antw = $_GET['antw'];

    echo "Jouw antwoord is $antw<br>";
    if ($antw == "Parijs") {
        echo "Dit is goed.";
    }
    else {
        echo"Dit is fout.";
    }
?>
<br>
<br>
<a href="opdracht32vraag.html" font-size="14">Terug</a>

</body>
</html>
