<?php
// Array amb notes
$notes = [6, 7.5, 4, 8];

// Calculem la mitjana
$mitjana = array_sum($notes) / count($notes);

// Mostrem la nota mitjana
echo "Nota mitjana: $mitjana<br>";

// Comprovem si està aprovat o suspès
if ($mitjana >= 5) {
    echo "Està aprovat.";
} else {
    echo "Està suspès.";
}
?>
