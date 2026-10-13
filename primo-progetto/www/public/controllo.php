<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Controllo</title>
</head>
<body>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = htmlspecialchars($_POST['password']);
    if(strlen($password) < '8' || !preg_match("/^[a-zA-Z0-9-' ]*$/",$password)){
        echo '<form action="login.php">';
        echo '<h1>Password non valida</h1>';
        echo '<p>La password deve avere i seguenti requisiti: deve contenere almeno 8 caratteri, almeno un numero e almeno una lettera maiuscola</p>';
        echo "<button type='submit'>Ritorna al login</button>";
        echo '</form>';
    }else{

    }
}
?>
</body>
</html>
