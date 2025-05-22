<?php
// Comprovem si s'ha enviat el formulari i validem els camps
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $correu = $_POST['email'];
    $missatge = $_POST['missatge'];

    if (empty($nom) || empty($correu) || empty($missatge)) {
        echo "Tots els camps són obligatoris.";
    } else {
        echo "Nom: $nom<br>Email: $correu<br>Missatge: $missatge";
    }
}
?>

<form method="post">
    Nom: <input type="text" name="nom"><br>
    Correu: <input type="email" name="email"><br>
    Missatge: <textarea name="missatge"></textarea><br>
    <input type="submit" value="Enviar">
</form>
