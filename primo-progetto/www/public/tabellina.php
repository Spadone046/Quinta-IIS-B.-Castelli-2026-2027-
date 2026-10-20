<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Tabellina</title>
</head>
<body>
    <?php
    echo "<h1>";
    echo "Tabellina del " . $_GET['valore'];
    echo"<br>";
    echo "<table border='1'>";
    for ($i = 1; $i <= 10; ++$i){
        echo "<tr><td>" . $_GET['valore']*$i . "</td></tr>";
    }
    echo "</table>";
    echo "</h1>";
    echo '<form action="tavola-pitagorica.php" method="post">';
    echo "<button type='submit'>Torna alla tavola pitagorica</button>";
    echo '</form>';
    ?>
</body>
</html>