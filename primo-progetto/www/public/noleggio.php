<!doctype html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Noleggio</title>
</head>
<body>
<h1>Richiesta di noleggio</h1>
<p>Tipologia selezionata: <?php
    if($_GET['tipo'] == "mtb"){
        echo '<strong>Mountain Bike</strong>';
    }elseif ($_GET['tipo'] == "elettrica"){
        echo '<strong>Bicicletta Elettrica</strong>';
    }
?></p>
<form method="post">
    <label for="nome">Nominativo del cliente: </label><input type="text" id="nome" name="nome"><br>
    <label for="giorni">Numero di giorni: </label><select id="giorni" name="giorni">
        <option></option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
    </select><br>
    <input type="checkbox" id="domicilio" name="domicilio"><label for="domicilio">Consegna a domicilio (supplemento di 5€)</label><br>
    <button id="noleggia" type="submit">Calcola costo</button><button type="reset">Reset</button>
</form>
<form>
    <h1>Riepilogo prenotazione</h1>
    <table border="1">
        <tr>
            <?php
            $giorni=0;
            $supp=0;
            $prezzo=0;
            if(isset($_GET['noleggia'])){
                if(isset($_GET['nome'])){
                    echo '<td>Nome del cliente</td><td>'. $_GET['nome'].'</td></tr>';
                }if($_GET['tipo']== "mtb"){
                    echo '<tr><td>Tipologia di bicicletta</td><td>Mountain Bike</td></tr>';
                    $prezzo = 12;
                }elseif ($_GET['tipo']== "elettrica"){
                    echo '<tr><td>Tipologia di bicicletta</td><td>Bicicletta Elettrica</td></tr>';
                    $prezzo = 20;
                }if(isset($_GET['giorni'])){
                    echo '<tr><td>Numero di giorni</td><td>'. $_GET['giorni'].'</td></tr>';
                    $giorni = $_GET['giorni'];
                }if($_GET['tipo']== "mtb"){
                    echo '<tr><td>Costo giornaliero</td><td>12,00€</td></tr>';
                }elseif ($_GET['tipo']== "elettrica"){
                    echo '<tr><td>Costo giornaliero</td><td>20,00€</td></tr>';
                }if(isset($_GET['domicilio'])){
                    echo '<tr><td>Supplemento consegna</td><td>5,00€</td></tr>';
                    $supp = 5;
                }else{
                    echo '<tr><td>Supplemento consegna</td><td>0,00€</td></tr>';
                }
                $tot = $prezzo*$giorni+$supp;
                echo '<tr><td>Costo totale</td><td>'.$tot.'</td>';
            }
            ?>
        </tr>
    </table>
</form>
<form action="home.php">
    <button type="submit">Torna alla home</button>
</form>
</body>
</html>
