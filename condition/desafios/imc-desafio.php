<?php

$altura = 1.60;
$peso = 60;
$imc = $peso / $altura ** $altura;

if ($imc > 18.5) {
    echo "Peso normal";
} else if ($imc > 25) {
    echo "Sobrepeso";
} else if ($imc > 34.9) {
    echo " obesidade grau I";
} else if ($imc > 39.9) {
    echo "obesidade grau II (severa)";
} else if ($imc > 40) {
    echo "obesidade grau III (mórbida)";
}
