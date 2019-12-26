<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Opdracht4.1</title>
</head>
<body>

<?php
    $Getal = $_POST['getal'];

if (is_numeric($Getal)){
    $GA[0] = 1 * $Getal;
    $GA[1] = 2 * $Getal;
    $GA[2] = 3 * $Getal;
    $GA[3] = 4 * $Getal;
    $GA[4] = 5 * $Getal;
    $GA[5] = 6 * $Getal;
    $GA[6] = 7 * $Getal;
    $GA[7] = 8 * $Getal;
    $GA[8] = 9 * $Getal;
    $GA[9] = 10 * $Getal;

    for($i=0;$i<10;$i++){
        $y = $i + 1;
        echo $y ." x ". $Getal ." = ". $GA[$i] . "<br>";
    }

    echo "<br><br><a href='opdracht41.html'>terug</a>";

}

else{›
    echo "Je heb geen getal ingevuld!<br><br>";
    echo "<a href='opdracht41.html'>terug</a>";
}


?>

</body>
</html>
