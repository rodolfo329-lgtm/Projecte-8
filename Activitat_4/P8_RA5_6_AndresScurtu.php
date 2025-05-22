<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ciutat = $_POST['ciutat'];
    echo "Has seleccionat: $ciutat";
}
?>

<form method="post">
    Ciutat:
    <select name="ciutat">
        <option value="Barcelona">Barcelona</option>
        <option value="Tarragona">Tarragona</option>
        <option value="Lleida">Lleida</option>
    </select>
    <input type="submit" value="Enviar">
</form>
