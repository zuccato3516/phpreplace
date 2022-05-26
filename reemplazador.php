<?php

//REEMPLAZADOR//
// Copiar el código entero de base.php a salida.php.
// Luego, copiar y pegar la línea 14 la cantidad de veces necesaria.
// En la línea 14, cambiamos la palabra private por la palabra asado.
// En cada copia de esta línea, cambiar la palabra que busco reemplazar con su reemplazo.
// Guardar, y ejecutar.

$archivoEntrada = './base.php';
$archivoSalida = './salida.php';

$contenido = file_get_contents($archivoEntrada);
$contenido = str_replace("private", "papa", $contenido);
file_put_contents($archivoSalida, $contenido);

?>