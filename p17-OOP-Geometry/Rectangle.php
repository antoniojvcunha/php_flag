<?php

class Rectangle
{
    public $width;
    public $height;

    function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    function perimeter()
    {
        return 2 * ($this->width + $this->height);
    }

    function area()
    {
        return $this->width * $this->height;
    }

    function detailString()
    {
        return "r: {$this->width}x{$this->height} <br> p: " . $this->perimeter() . "<br>" . " a: " . $this->area();
    }
}

