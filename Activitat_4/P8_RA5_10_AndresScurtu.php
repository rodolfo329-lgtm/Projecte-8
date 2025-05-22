<?php
$errors = [];
$nom = $email = $assumpte = $missatge = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = trim($_POST['nom']);
    $email = trim($_POST['email']);
    $assumpte = trim($_POST['assumpte']);
    $missatge = trim($_POST['missatge']);

    if (empty($nom)) $errors[] = "Nom obligatori.";
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Email no vàlid.";
    if (empty($assumpte)) $errors[] = "Assumpte obligatori.";
    if (empty($missatge)) $errors[] = "Missatge obligatori.";

    if (empty($errors)) {
        echo "<p style='color:green'>Formulari enviat correctament!</p>";
    }
}
?>

<?php foreach ($errors as $error) echo "<p style='color:red'>$error</p>"; ?>

<form method="post">
    Nom: <input type="text" name="nom" value="<?= htmlspecialchars($nom) ?>"><br>
    Email: <input type="email" name="email" value="<?= htmlspecialchars($email) ?>"><br>
    Assumpte: <input type="text" name="assumpte" value="<?= htmlspecialchars($assumpte) ?>"><br>
    Missatge: <textarea name="missatge"><?= htmlspecialchars($missatge) ?></textarea><br>
    <input type="submit" value="Enviar">
</form>
