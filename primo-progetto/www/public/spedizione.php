<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Spedizione</title>
</head>


<body>
<form action="<?php $_SERVER['']?>" id="spedizione" name="spedizione" method="post">
    <h1>Richiesta di spedizione</h1>
    <?php
        echo '<p>Tipologia di richiesta selezionata:</p>' . $_GET['tipo'];
    ?>
    <br>
    <label for="nome">Nome del cliente:        </label><input id="nome" name="nome" type="text"><br>
    <label for="peso">Peso del pacco (kg):</label>
    <select id="peso" name="peso">
        <option></option>
        <option id="peso" name="1" value="1">1</option>
        <option id="peso" name="2" value="2">2</option>
        <option id="peso" name="3" value="3">3</option>
        <option id="peso" name="4" value="4">4</option>
        <option id="peso" name="5" value="5">5</option>
        <option id="peso" name="6" value="6">6</option>
    </select><br>
    <label for="aereo">Invio aereo:</label><input type="checkbox" id="aereo"><br>
    <button type="submit">Calcola prezzo</button><br>
    <form action="home.php">
        <button type="submit">Torna alla home</button>
    </form>
    <?php
        if(isset($_GET['spedizione'])){
            echo "<h2>Riepilogo della richiesta di spedizione:</h2>";
            echo "<table><tr><td>Nome del cliente</td>";
            if(isset($_POST['nome'])){
                $nome = $_POST['nome'];
            }
            echo "<td>". $nome . "</td></tr></table>";
            echo "<table><tr><td>Peso del pacco</td>";
            if(isset($_POST['peso'])){
                $peso = $_POST['peso'];
            }
            echo "<td>". $peso . "</td></tr></table>";
            echo "<table><tr><td>Costo per chilogrammo</td>";
            if($_GET['tipo'] == 'Standard'){
                $costo = 3;
            }else{
                $costo = 5;
            }
            echo "<td>". $costo . "€</td></tr></table>";
            echo "<table><tr><td>Supplemento aereo</td>";
            if(isset($_POST['aereo'])){
                $aereo = 10;
            }else{
                $aereo = 0;
            }
            echo "<td>". $aereo . "€</td></tr></table>";
            echo "<table><tr><th>Costo totale</th>";
            $totale = $peso*$costo + $aereo;
            echo "<th>". $totale . "€</th></tr></table>";
            echo "<p>Richiesta di spedizione <strong>effettuata correttamente</strong>!</p>";
        }
    ?>
</form>
</body>
</html>
