<?php
function fibonacci($n) {
    $fib_sequence = array();
    if ($n >= 1) {
        $fib_sequence[] = 0;
    }
    if ($n >= 2) {
        $fib_sequence[] = 1;
    }
    for ($i = 2; $i < $n; $i++) {
        $next_fib = $fib_sequence[$i-1] + $fib_sequence[$i-2];
        $fib_sequence[] = $next_fib;
    }
    return $fib_sequence;
}

// Ejemplo de uso:
$numero_de_terminos = 10;
$serie = fibonacci($numero_de_terminos);
echo "Serie de Fibonacci hasta $numero_de_terminos términos: " . implode(", ", $serie);

echo("<br>");
echo("<br>");


// Función para verificar si un número es primo

function esPrimo($numero) {
  if ($numero <= 1) {
    return false; // Los números menores o iguales a 1 no son primos
  }
  for ($i = 2; $i <= sqrt($numero); $i++) {
    if ($numero % $i == 0) {
      return false; // Si encuentra un divisor, no es primo
    }
  }
  return true; // Si no encontró divisores, es primo
}

// Ejemplo de uso
$numero = 29;
if (esPrimo($numero)) {
  echo "$numero es un número primo\n";
} else {
  echo "$numero no es un número primo\n";
}

echo("<br>");
echo("<br>");

?>



// Palíndromos 

<?php
function esPalindromo($texto) {
    // Quitamos espacios y convertimos todo a minúsculas
    $limpio = strtolower(str_replace(' ', '', $texto));

    // Invertimos la cadena
    $reverso = strrev($limpio);

    // Mostramos lo que estamos comparando (opcional para entender)
    echo "Texto original: $limpio\n";
    echo "Texto invertido: $reverso\n";

    // Comparamos si son iguales
    if ($limpio == $reverso) {
        echo "Sí, '$texto' es un palíndromo.\n";
    } else {
        echo "No, '$texto' NO es un palíndromo.\n";
    }
}

// Prueba con una palabra o frase
esPalindromo("Anita lava la tina");
?>


