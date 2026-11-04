<?php

// Determinar si un numero es capicua usando arrays y sus funciones




// Determinar si una cadena de texto es palindromo usando strings y sus funciones





// Generar los primeros N elementos de las siguientes series:
// 1, 1, 2, 3, 5, 8, 13 ...
// 1, 2, 1, 4, 3, 6, 5, 8 ...
// 2, 3, 5, 7, 11, 13, 17 ...  // Solo es divisible entre 1 y si mismo
// 1, 2, 2, 1, 3, 4, 2, 5, 6, 3, 7, 8 ...
// 1, 1, 2, 2, 1, 3, 3, 4, 2, 5, 5, 6, 3, 7, 7, 8 ...






















// CALLBACKS
// Es una función o método que se pasa como argumento a otra función para que esta lo ejecute cuando lo necesite.

function operarPositivos($a, $b, $sumarFunction) {
  $resultA = abs($a);
  $resultB = abs($b);

  $result = $sumarFunction($resultA, $resultB);

  return $result;
}

var_dump(operarPositivos(6, -6, fn($a, $b) => $a + $b ));