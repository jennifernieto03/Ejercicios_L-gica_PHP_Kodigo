<?php
declare(strict_types=1);

/**
 * Determina si un número es primo.
 *
 * @param int $numero
 * @return bool
 */
function esPrimo(int $numero): bool
{
    if ($numero <= 1) {
        return false;
    }

    if ($numero === 2) {
        return true;
    }

    if ($numero % 2 === 0) {
        return false;
    }

    $limite = (int) sqrt($numero);

    for ($i = 3; $i <= $limite; $i += 2) {
        if ($numero % $i === 0) {
            return false;
        }
    }

    return true;
}

// Pruebas
$numeros = [1, 2, 3, 4, 5, 17, 18, 19, 20];
foreach ($numeros as $numero) {
    echo "¿$numero es primo? " . (esPrimo($numero) ? 'Sí' : 'No') . "<br>";
}

