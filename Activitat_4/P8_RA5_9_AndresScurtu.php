<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $comentari = htmlspecialchars($_POST['comentari']);
    echo "Comentari rebut:<br>$comentari";
}
?>

<form method="post">
    Comentari: <textarea name="comentari"></textarea><br>
    <input type="submit" value="Enviar">
</form>
