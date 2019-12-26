<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulier</title>
</head>
<body>
<?php
    $Getal1 = $_POST['G1'];
    $Getal2 = $_POST['G2'];
    $Getal3 = $_POST['G3'];
    $Getal4 = $_POST['G4'];
    $SR = $Getal1 + $Getal2 + $Getal3 + $Getal4;
    $KR = $Getal1 * $Getal2 * $Getal3 * $Getal4;
?>

<p><?php echo "$Getal1 + $Getal2 + $Getal3 + $Getal4 = $SR"; ?><br>
    <?php echo "$Getal1 x $Getal2 x $Getal3 x $Getal4 = $KR"; ?>
</p>

</body>
</html>