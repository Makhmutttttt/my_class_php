<?php

namespace App\figure;
use App\Controllers\API\Shape;
use App\figure\Rectangle;
use App\traits\Resizable;


class Square extends Rectangle {
    use Resizable;
    public function __construct(float $sideLength, string $color) {
        parent::__construct($sideLength, $sideLength, $color);
    }
    public $sideLength;
    // public $color;
    public function get_sideLength(){
        return $this->sideLength;
    }
    public function calcArea(){
        return $this->sideLength * 4;
    }

    
}


?>