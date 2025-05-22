<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['genere'])) {
    echo "Gènere seleccionat: " . $_POST['genere'];
}
?>

<form method="post">
    <label><input type="radio" name="genere" value="Home"> Home</label><br>
    <label><input type="radio" name="genere" value="Dona"> Dona</label><br>
    <label><input type="radio" name="genere" value="Altres"> Altres</label><br>
    <input type="submit" value="Enviar">
</form>
