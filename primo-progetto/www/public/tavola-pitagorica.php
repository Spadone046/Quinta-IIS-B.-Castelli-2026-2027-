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
        <th>0</th>
        <th>1</th>
        <th>2</th>
        <th>3</th>
        <th>4</th>
        <th>5</th>
        <th>6</th>
        <th>7</th>
        <th>8</th>
        <th>9</th>
        <th>10</th>
    </tr>
    <?php
        for($j = 0; $j <= 10; $j++){
            echo "<tr>";
            echo "<th> . $j . </th>";
            for ($i = 0; $i <= 10; ++$i) {
                echo "<td> . $j*$i . </td>";
            }
            echo "</tr>";
        }
    ?>

</table>
</body>
</html>

