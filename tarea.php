<?php
// Declaración de Variables
$integerVar = 10;
$floatVar = 28;
$stringVar = "Hola, mundo";
$booleanVar = true;
$arrayVar = array(1, 2, 3, 4, 5);

// Operaciones Aritméticas
$suma = $integerVar + $floatVar;
$multiplicacion = $integerVar * $floatVar;
echo "La suma de $integerVar y $floatVar es: $suma<br>";
echo "La multiplicación de $integerVar y $floatVar es: $multiplicacion<br>";

// Manipulación de Cadenas
$cadena1 = "Hola";
$cadena2 = "Mundo";
$cadenaConcatenada = $cadena1 . " " . $cadena2;
echo "Cadena concatenada: $cadenaConcatenada<br>";
echo "Longitud de la cadena concatenada: " . strlen($cadenaConcatenada) . "<br>";

// Uso de Condicionales
if ($booleanVar) {
    echo "La variable booleana es verdadera.<br>";
} else {
    echo "La variable booleana es falsa.<br>";
}

// Creación de un Array
$arrayVar = array("manzana", "banana", "cereza", "durazno", "pera");
echo "El tercer elemento del arreglo es: " . $arrayVar[2] . "<br>";
?>

