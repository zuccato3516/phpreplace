<?php

//REEMPLAZADOR//
// Copiar el código entero de base.php a salida.php.
// Luego, copiar y pegar la línea 14 la cantidad de veces necesaria.
// En la línea 14, cambiamos la palabra private por la palabra asado.
// En cada copia de esta línea, cambiar la palabra que busco reemplazar con su reemplazo.
// Guardar, y ejecutar.

$archivoEntrada = './Ejemplo.php';
$archivoSalida = './salida.php';

$contenido = file_get_contents($archivoEntrada);
$contenido = str_replace("EjemploClase", "    ", $contenido);//entre "  " poner el nombre de la clase
$contenido = str_replace("arandano", "    ", $contenido);//entre "  " poner el atributo 1
$contenido = str_replace("Arandano", "    ", $contenido);//entre "  " poner el atributo 1 con Mayuscula
$contenido = str_replace("banana", "     ", $contenido);//entre "  " poner el atributo 2
$contenido = str_replace("Banana", "    ", $contenido);//entre "  " poner el atributo 2 con Mayuscula
$contenido = str_replace("coco", "     ", $contenido);//entre "  " poner el atributo 3
$contenido = str_replace("Coco", "      ", $contenido);//entre "  " poner el atributo 3 con Mayuscula
$contenido = str_replace("durazno", "     ", $contenido);//entre "  " poner el atributo 4
$contenido = str_replace("Durazno", "     ", $contenido);//entre "  " poner el atributo 4 Con Mayuscula
$contenido = str_replace("esparrago", "       ", $contenido);//entre "  " poner el atributo 5
$contenido = str_replace("Esparrago", "      ", $contenido);//entre "  " poner el atributo 5 Con Mayuscula
$contenido = str_replace("frutilla", "       ", $contenido);//entre "  " poner el atributo 6
$contenido = str_replace("Frutilla", "       ", $contenido);//entre "  " poner el atributo 6 Con Mayuscula
$contenido = str_replace("guinda", "         ", $contenido);//entre "  " poner el atributo 7
$contenido = str_replace("Guinda", "       ", $contenido);//entre "  " poner el atributo 7 Con Mayuscula
$contenido = str_replace("nombreArreglo", "       ", $contenido); //entre "  " poner el nombre del atributo Arreglo
$contenido = str_replace("Arreglo", "       ", $contenido);//entre "  " poner el nombre del atributo Arreglo 4 Con Mayuscula

file_put_contents($archivoSalida, $contenido);

?>