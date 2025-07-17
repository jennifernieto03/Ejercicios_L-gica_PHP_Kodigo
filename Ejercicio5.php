<?php
function llamadas($clave, $minutos){
    switch ($clave) {
        case 12:
            $precio = 2.00;
            $zona="America del Norte";
            break;
        case 15:
            $precio = 2.20;
            $zona="America Central";
            break;
        case 18:
            $precio = 4.50;
            $zona="America del Sur";
            break;
        case 19:
            $precio = 3.50;
            $zona="Europa";
            break;
        case 23:
            $precio = 6.00;
            $zona="Asia";
            break;
        case 25:
            $precio = 6.00;
            $zona="Africa"; 
            break;
        case 29:
            $precio = 5.00;
            $zona="Oceanía";
            break;
    }
    $total = $minutos * $precio;
    echo "Llamada a la zona: $zona <br>";
    echo "Precio por minuto: $$precio <br>";
    echo "Total a pagar por $minutos minutos: $$total <br>";
}
llamadas(15, 10);