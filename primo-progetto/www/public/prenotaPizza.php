<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Prenota Pizza</title>
</head>
<body>
<?php
echo '<form action="prenotaPizza.php" method="post">';
echo "<h1>Prenota la tua pizza</h1>";
echo "<label for='sistemazione'>Scegli la sistemazione: </label><select id='sistemazione'>
<option value='Interno'>Interno</option>
<option value='Esterno'>Esterno</option>
</select><br><br>";
echo "<label for='pizza'>Scegli la pizza: </label><select id='pizza'>
<option value='Margherita'>Margherita</option>
<option value='Marinara'>Marinara</option>
<option value='4 Stagioni'>4 Stagioni</option>
<option value='Americana'>Americana</option>
</select><br><br>";
echo "<label>Seleziona eventuali aggiunte:</label><br>
<input type='checkbox' id='aggiunta1' name='aggiunta1' value='Prosciutto'>
<label for='aggiunta1'>Prosciutto</label><br>
<input type='checkbox' id='aggiunta2' name='aggiunta2' value='Ricotta'>
<label for='aggiunta2'>Ricotta</label><br>
<input type='checkbox' id='aggiunta3' name='aggiunta3' value='Salsiccia'>
<label for='aggiunta3'>Salsiccia</label><br><br>";
echo "<label>Seleziona il tipo di impasto:</label><br>
<input type='radio' id='noGlutine' name='impasto' value='Senza glutine'>
<label for='noGlutine'>Senza glutine</label><br>
<input type='radio' id='normale' name='impasto' value='Normale'>
<label for='normale'>Normale</label><br>";
echo "<button type='submit'>Ordina</button>";
echo '</form>'
?>
</body>
</html>