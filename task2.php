<?php
$first_color = readline("Введите первый цвет: ");
$second_color = readline("Введите второй цвет ");

if ($first_color === 'красный' and $second_color === 'синий') {
    echo 'фиолетовый';
} elseif ($first_color === 'красный' and $second_color === 'желтый') {
    echo 'оранжевый';
} elseif ($first_color === 'синий' and $second_color === 'желтый') {
    echo 'зеленый';
} elseif ($first_color === $second_color) {
    echo $first_color;
} else {
    echo 'Неверный цвет';
}


