<?php
// Mostrem les dades si existeixen
if (isset($_GET['nom']) && isset($_GET['edat'])) {
    echo "Nom: " . $_GET['nom'] . "<br>";
    echo "Edat: " . $_GET['edat'];
}
?>

<form method="get">
    Nom: <input type="text" name="nom"><br>
    Edat: <input type="number" name="edat"><br>
    <input type="submit" value="Enviar">
</form>
