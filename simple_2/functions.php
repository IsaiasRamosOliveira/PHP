<?php
require_once "touppercase.php";
function sacar(array $conta, float $valor): array
{
  if ($conta["saldo"] >= $valor) {
    $conta["saldo"] -= $valor;
  } else {
    echo "você não tem saldo o suficiente." . PHP_EOL;
  }
  return $conta;
};

function depositar(array $conta, float $valor): array
{
  if ($valor > 0) {
    $conta["saldo"] += $valor;
  } else {
    echo "O valor tem que ser maior que zero." . PHP_EOL;
  }
  return $conta;
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

$contas["conta1"] = sacar($contas["conta1"], 300);
$contas["conta1"] = depositar($contas["conta1"], 100);
toUpperCase($contas["conta1"]);

foreach ($contas as $key => $value) {
  echo "{$value['name']} - {$value['saldo']}" . PHP_EOL;
};
