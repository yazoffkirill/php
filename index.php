<?php

spl_autoload_register(function ($class) {
    include 'src/' . str_replace('App\\', '', $class) . '.php';
});

use App\Point;
use App\Vector;

// 1. Точка T1
$T1 = new Point(3, 4);
echo "Точка T1: ({$T1->x}, {$T1->y})\n";

// 2. Вектор V1
$V1 = new Vector(3, 4);
echo "Вектор V1: ({$V1->x}, {$V1->y})\n";

// 3. Нулевой вектор V2
$V2 = new Vector(0, 0);
echo "Вектор V2: ({$V2->x}, {$V2->y})\n";

// 4. Вектор V3, перпендикулярный V1
$V3 = new Vector(-4, 3); // Для (3,4) перпендикулярен (-4,3)
echo "Вектор V3: ({$V3->x}, {$V3->y})\n\n";

// Длины векторов
echo "Длина V1: " . $V1->length() . "\n";
echo "Длина V2: " . $V2->length() . "\n";
echo "Длина V3: " . $V3->length() . "\n\n";

// Проверка перпендикулярности
echo "V1 и V3 перпендикулярны? " . 
    ($V1->isPerpendicularTo($V3) ? "Да" : "Нет") . "\n\n";

// Перенос точки T1 на вектор V1
echo "Перенос T1 на вектор V1:\n";
echo "До: ({$T1->x}, {$T1->y})\n";
$T1->move($V1->x, $V1->y);
echo "После: ({$T1->x}, {$T1->y})\n";
