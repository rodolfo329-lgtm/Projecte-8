<?php
// Array associatiu amb nom => edat
$alumnes = [
    "Clara" => 17,
    "Jordi" => 18,
    "Sara" => 20,
    "Nil" => 16,
    "Eva" => 19
];

// Recorrem i mostrem només els alumnes majors d'edat
foreach ($alumnes as $nom => $edat) {
    if ($edat >= 18) {
        echo "$nom té $edat anys (major d’edat)<br>";
    }
}
?>
