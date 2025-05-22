<?php
// Definim una funció que rep preu i percentatge d'IVA
function calcularIVA($preu, $percentatge) {
    return $preu + ($preu * $percentatge / 100);
}

// Cridem la funció amb un preu i IVA del 21%
$preuFinal = calcularIVA(100, 21);

// Mostrem el preu amb IVA
echo "Preu amb IVA: $preuFinal €";
?>
