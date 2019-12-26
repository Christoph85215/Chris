<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulier</title>
</head>
<body>
<?php
    //vul variabelen met waardes uit de POST
    $naam = $_POST['naam'];
    $woonplaats = $_POST['woonplaats'];

    ?>

<p>Beste <?php echo $naam; ?>,<br>
    Jouw formulie is verwerkt. <br/>
    Je woont in <?php echo $woonplaats; ?></p>

</body>
</html>
