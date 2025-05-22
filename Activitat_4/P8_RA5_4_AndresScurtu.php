<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Correu vàlid: $email";
    } else {
        echo "Correu no vàlid.";
    }
}
?>

<form method="post">
    Correu electrònic: <input type="text" name="email">
    <input type="submit" value="Validar">
</form>
