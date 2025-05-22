<?php
// Comprovem si el formulari s'ha enviat
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    echo "Benvingut/da, $nom!";
}
?>

<form method="post">
    Nom: <input type="text" name="nom">
    <input type="submit" value="Enviar">
</form>
