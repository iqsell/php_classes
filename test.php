<?php
$a = readline("a= ");
$sign = readline("Sign: ");
$b = readline("b= ");

if ($sign === '+') {
    echo $a + $b;
} elseif ($sign === '-') {
    echo $a - $b;
} elseif ($sign === '*') {
    echo $a * $b;
} elseif ($sign === '/' and $b == 0) {
    echo 'На ноль делить нельзя';
} elseif ($sign === '/') {

    echo $a / $b;
} else {
    echo 'Неверная операция';
}

