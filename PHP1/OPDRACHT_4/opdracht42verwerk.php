<?php

$antw = $_POST['antw'];

switch ($antw) {
    case "D":
        echo "Jou antwoord is fout
        <br><br>
        <a href='opdracht42form.php'>Tergu</a>";
        break;
    case "H":
        echo "Jou antwoord is fout
        <br><br>
        <a href='opdracht42form.php'>Tergu</a>";
        break;
    case "C":
        echo "Jou antwoord is fout
        <br><br>
        <a href='opdracht42form.php'>Tergu</a>";
        break;
    case "S":
        echo "Jou antwoord is goed
        <br><br>
        <a href='opdracht42form.php'>Tergu</a>";
        break;
    case "K":
        echo "Jou antwoord is fout
        <br><br>
        <a href='opdracht42form.php'>Tergu</a>";
        break;
    default:
        echo "$antw Je moet alleen een antwoord kiezen<br><br>
        <a href='opdracht42form.php'>Tergu</a>";
}
?>