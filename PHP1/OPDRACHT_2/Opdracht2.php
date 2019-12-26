<?php
$eersteGetal = 16;
$tweedeGetal = 2;
$S= $eersteGetal + $tweedeGetal;
$M= $eersteGetal - $tweedeGetal;
$K= $ersteGetal * $tweedeGetal;
$D= $eersteGetal / $tweedeGetal;

$voornaam = "Christoph";
$achternaam = "da Silva";
$leeftijd = 19;




echo '<p><strong>A)</strong> Maak hierin twee variabelen: $eersteGetal = 16 en $tweedeGetal = 2.<br>
				Met deze twee variabelen maak je 4 verschillende sommen (+, -, x, en / ).<br>
				Gebruik bij deze uitvoer alleen maar variabelen! Dus niet: echo 18 + 2 = 20.</p>';

echo "<p>$eersteGetal + $tweedeGetal = $S<br>
        $eersteGetal - $tweedeGetal = $M<br>
        $eersteGetal * $tweedeGetal = $K<br>
        $eersteGetal / $tweedeGetal = $D</p><br>";

echo "<p><strong>B)</strong> Zoek op internet hoe je de wortel(<i>raiz</i>) van een getal uitrekent.</p>";
echo (sqrt($eersteGetal));

echo '<p><br><strong>C)</strong> Breidt de code uit met drie nieuwe variabelen. $voornaam, $achternaam, $leeftijd.</p>';
echo "<p>Mijn naam is <i>$voornaam $achternaam</i> en ik ben <strong>$leeftijd</strong> jaar oud.</p>";
?>