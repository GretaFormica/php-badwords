<?php
    $_GET["words"]. " " .$_GET["bad"];
    $_words = $_GET["words"];
    $_bad = $_GET["bad"];

    $_correzione = str_replace($_bad, "***", $_words);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>badwords result</title>
</head>
<body>

    <h1>
        risultato: 
        <?php
            echo $_correzione;
        ?>
        
    </h1>
    
</body>
</html>