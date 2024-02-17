<?php

function Intersection(int $a1, int $b1, int $a2, int $b2): string
{
    $first = max($a1, $a2);
    $second = min($b1, $b2);

    if ($first > $second) {
        return "Пересечение пустое";
    } else if ($first == $second) {
        return "Пересечение в точке " . $first;
    } else {
        return "Пересечение отрезок [" . $first . "; " . $second . "]";
    }
}

echo Intersection(2, 6, 4, 8) . PHP_EOL;
echo Intersection(1, 2, 3, 4) . PHP_EOL;
echo Intersection(1, 2, 2, 3) . PHP_EOL;