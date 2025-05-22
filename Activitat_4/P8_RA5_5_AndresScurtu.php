<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['aficions'])) {
    echo "Aficions seleccionades:<ul>";
    foreach ($_POST['aficions'] as $aficio) {
        echo "<li>$aficio</li>";
    }
    echo "</ul>";
}
?>

<form method="post">
    <label><input type="checkbox" name="aficions[]" value="Música"> Música</label><br>
    <label><input type="checkbox" name="aficions[]" value="Esport"> Esport</label><br>
    <label><input type="checkbox" name="aficions[]" value="Lectura"> Lectura</label><br>
    <input type="submit" value="Enviar">
</form>
