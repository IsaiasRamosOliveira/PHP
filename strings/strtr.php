<?php

$string = "hi all, I said hello!";

echo strtr($string, ["hello" => "hi", "hi" => "hello"]);
