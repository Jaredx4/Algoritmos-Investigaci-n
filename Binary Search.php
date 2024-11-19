<?php

function binarySearch($arr, $target) {
    $left = 0;
    $right = count($arr) - 1;

    while ($left <= $right) {
        $middle = floor(($left + $right) / 2);

        if ($arr[$middle] == $target) {
            return $middle; // Elemento encontrado
        } elseif ($arr[$middle] < $target) {
            $left = $middle + 1; // Buscar en la mitad derecha
        } else {
            $right = $middle - 1; // Buscar en la mitad izquierda
        }
    }
    return -1; // Elemento no encontrado
}
// Ejemplo de uso:
$array = [1, 3, 5, 7, 9, 11, 13, 15];
$target = 9;
$result = binarySearch($array, $target);

if ($result != -1) {
    echo "Elemento encontrado en el índice: $result";
} else {
    echo "Elemento no encontrado";
}
?>
