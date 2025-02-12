<?php

class Circle
{
    public $radius;
    public $pi = 3.14159;

    function __construct($radius, $pi)
    {
        $this->radius = $radius;
        $this->pi = $pi;
    }

    function circunference()
    {
        return 2 * $this->pi * $this->radius;
    }

    function area()
    {
        return $this->pi * pow($this->radius, 2);
    }

    function detailStringCircle()
    {
        return "<br> circunference: 2 x $this->pi <br> area: $this->pi x ($this->radius)^2 ";
    }
}
