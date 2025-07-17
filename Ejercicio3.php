<?php
// Archivo: es_palindromo.php
declare(strict_types=1);

/**
 * Determina si una cadena es un palíndromo.
 *
 * @param string $texto
 * @return bool
 */
function esPalindromo(string $texto): bool
{
    // Limpiar espacios y caracteres no alfanuméricos, y convertir a minúsculas
    $textoLimpio = strtolower(preg_replace('/[^a-z0-9]/i', '', $texto));
    $textoInvertido = strrev($textoLimpio);

    return $textoLimpio === $textoInvertido;
}

// Pruebas
$palabras = [
    "reconocer",
    "Anita lava la tina",
    "hola",
    "oso",
    "La ruta natural",
    "PHP"
];

foreach ($palabras as $palabra) {
    echo "\"$palabra\" es " . (esPalindromo($palabra) ? '' : 'no ') . "un palíndromo.<br>";
}
