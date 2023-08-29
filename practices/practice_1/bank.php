<?php
require_once "withdraw.php";
require_once "deposit.php";

$users = [
    "user1" => [
        "name" => "Isaías ramos",
        "balance" => 10000
    ],
    "user2" => [
        "name" => "Ana",
        "balance" => 6000
    ],
    "user3" => [
        "name" => "Paulo",
        "balance" => 1200
    ],
    "user4" => [
        "name" => "Maria",
        "balance" => 3000
    ]
];

foreach($users as $index => &$user){
    $user["name"] = strtoupper($user["name"]);
};

withdraw($users["user1"], 1300);
withdraw($users["user4"], 1100);
deposit($users["user2"], 1100);