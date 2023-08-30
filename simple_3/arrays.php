<?php

$grades1 = [
    "isaias" => 9,
    "ana" => 23,
    "paula" => 12,
    "pedro" => null,
    "sabrina" => 21,
];


$grades2 = [
    "isaias" => 9,
    "ana" => 9,
    // "paula" => 12,
    "pedro" => null,
    "sabrina" => 21,
];

// $grades1 -> O Array que será comparado.  
// $grades2 -> O Array que será analisado.
$gradesFilter = array_diff_assoc($grades1, $grades2); // paula e ana
var_dump(array_keys($gradesFilter));

