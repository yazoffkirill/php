<?php

namespace App;

class Vector
{
    public $x;
    public $y;
    
    public function __construct($x = 0, $y = 0)
    {
        $this->x = $x;
        $this->y = $y;
    }
    
    // Длина вектора
    public function length()
    {
        return sqrt($this->x * $this->x + $this->y * $this->y);
    }
    
    // Проверка на нулевой вектор
    public function isZero()
    {
        return $this->x == 0 && $this->y == 0;
    }
    
    // Проверка на перпендикулярность
    public function isPerpendicularTo(Vector $other)
    {
        return ($this->x * $other->x + $this->y * $other->y) == 0;
    }
}