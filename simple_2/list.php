<?php

$contas = [
    "conta1" => [
        "name" => "Isaias",
        "saldo" => 10000,
    ],
    "conta2" => [
        "name" => "Ana",
        "saldo" => 1200,
    ]
];

list("name" => $name, "saldo" => $saldo) = $contas["conta1"];

echo "{$name} and {$saldo}";
