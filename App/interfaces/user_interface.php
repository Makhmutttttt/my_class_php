<?php

interface ShapeInterface{
    public function calcPerimeter();
}

class Circle implements ShapeInterface {
    private $radius;

    public function __construct(float $radius) {
        $this->radius = $radius;
    }

    public function calcPerimeter() {
        return 2 * pi() * $this->radius;
    }
}
