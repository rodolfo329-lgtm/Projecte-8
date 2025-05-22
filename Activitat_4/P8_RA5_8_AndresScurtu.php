<?php
$nom = $email = $missatge = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $missatge = $_POST['missatge'];

    if (empty($nom) || empty($email) || empty($missatge)) {
        $error = "Tots els camps són obligatoris.";
    } else {
        echo "Formulari enviat correctament!";
    }
}
?>

<?php if (!empty($error)) echo "<p style='color:red'>$error</p>"; ?>

<form method="post">
    Nom: <input type="text" name="nom" value="<?= htmlspecialchars($nom) ?>"><br>
    Email: <input type="email" name="email" value="<?= htmlspecialchars($email) ?>"><br>
    Missatge: <textarea name="missatge"><?= htmlspecialchars($missatge) ?></textarea><br>
    <input type="submit" value="Enviar">
</form>
