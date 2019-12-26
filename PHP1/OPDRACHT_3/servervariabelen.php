<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulier</title>
</head>
<body>

<?php
    $browser = $_SERVER['HTTP_USER_AGENT'];
    $ip = $_SERVER['REMOTE_ADDR'];
    $serverName = $_SERVER['SERVER_NAME'];
    $serverSoftware = $_SERVER['SERVER_SOFTWARE'];

    echo "<p>Beste bezoeker,</p>";
    echo "<p>Je gebruik bij je bezoek een $browser browser.";
    echo "<p>En deze websever heeft als naam; $serverName en deze sofware: $serverSoftware.";

?>

<p>Beste bezoeker</p>
<p>Je gebruik bij je bezoek een <?php echo $browser; ?> browser.</p>

</body>
</html>

