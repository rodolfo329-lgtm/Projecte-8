<?php
// Array multidimensional amb 3 usuaris
$usuaris = [
    ["nom" => "Anna", "correu" => "anna@mail.com", "edat" => 22],
    ["nom" => "Pere", "correu" => "pere@mail.com", "edat" => 16],
    ["nom" => "Laura", "correu" => "laura@mail.com", "edat" => 18]
];

// Funció que indica si és major d'edat
function esMajor($edat) {
    return $edat >= 18 ? "Sí" : "No";
}
?>

<!-- Taula HTML per mostrar les dades -->
<table border="1">
    <tr>
        <th>Nom</th>
        <th>Correu</th>
        <th>Edat</th>
        <th>Major d’edat?</th>
    </tr>
    <?php foreach ($usuaris as $usuari): ?>
    <tr>
        <td><?= $usuari['nom'] ?></td>
        <td><?= $usuari['correu'] ?></td>
        <td><?= $usuari['edat'] ?></td>
        <td><?= esMajor($usuari['edat']) ?></td>
    </tr>
    <?php endforeach; ?>
</table>
