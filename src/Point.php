<?php

namespace App;

class Point
{
    public $x;
    public $y;
    
    public function __construct($x = 0, $y = 0)
    {
        $this->x = $x;
        $this->y = $y;
    }
    
    public function move($dx, $dy)
    {
        $this->x += $dx;
        $this->y += $dy;
    }
}