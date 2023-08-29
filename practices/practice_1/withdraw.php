<?php
function withdraw(array &$user, int $value): void
{
  if ($value > $user["balance"]) {
    return;
  } else {
    $user["balance"] = $user["balance"] -= $value;
  }
}
