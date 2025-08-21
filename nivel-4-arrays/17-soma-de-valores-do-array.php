<?php

$arrayNumeros = [1, 2, 3, 4, 5];
$soma = 0;

foreach ($arrayNumeros as $numero) {
  $soma += $numero;
}

echo "<br>Soma: $soma";