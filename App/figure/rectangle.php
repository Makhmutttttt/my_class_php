<?php
namespace App\figure;
use App\Controllers\API\Shape;
class Rectangle extends Shape {
    public function calcPerimeter() {
        return 2 * ($this->width + $this->height);
    }
}

?>