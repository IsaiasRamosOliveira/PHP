<?php

function sacar($contas, $conta,  $saque)
{
    if ($contas[$conta]["saldo"] >= $saque) {
        return $contas[$conta]["saldo"] -= $saque;
    } else {
        echo "você não tem saldo o suficiente." . PHP_EOL;
    }
};

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

$contas["conta1"]["saldo"] = sacar($contas, "conta1", 300);

foreach ($contas as $key => $value) {
    echo $value["name"] . " - " . $value["saldo"] . PHP_EOL;
};
