<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Tavola periodica</title>
</head>
<body>
<h1>Tavola Pitagorica</h1>
<table border="2">
    <tr>
        <td>X</td>
        <?php
        for($j = 0; $j <= 10; $j++){
            echo "<th>" . $j . "</th>";
        }
        ?>
    </tr>
    <?php
        for($j = 0; $j <= 10; $j++){
            echo "<tr>";
            echo "<th>" . $j . "</th>";
            for ($i = 0; $i <= 10; ++$i) {
                echo "<td>" . $j*$i . "</td>";
            }
            echo "</tr>";
        }
    ?>

</table>
</body>
</html>

