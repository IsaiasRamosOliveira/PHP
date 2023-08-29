<?php

function deposit(array &$user, int $value): void
{
    if ($value < 0) {
        return;
    } else {
        $user["balance"] = $user["balance"] += $value;
    }
}
