<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
<?php
echo '<form action="controllo.php" method="post">';
echo "<h1>Login area riservata</h1>";
echo "<form>";
echo "<label for='username'>User</label><input type='text' id='username' name='username'><br>";
echo "<label for='password'>Password</label><input type='password' id='password' name='password'><br>";
echo "<button type='submit'>Invia</button>";
echo '</form>'
?>
</body>
</html>
