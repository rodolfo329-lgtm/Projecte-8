<?php
// Funció que calcula el factorial d'un número
function factorial($num) {
    $resultat = 1;
    for ($i = 1; $i <= $num; $i++) {
        $resultat *= $i; // Multiplica el resultat pel número actual
    }
    return $resultat;
}

// Mostrem el factorial de 5
echo "Factorial de 5 és " . factorial(5);
?>
