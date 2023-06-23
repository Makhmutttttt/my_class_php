<?php
namespace App\Controllers\API;
abstract class Shape{
    protected $width;
    protected $height;
    private $color;
    static public $count_figure = 0;
    public function __construct(float $width, float $height, string $color){
        $this->width = $width;
        $this->height = $height;
        $this->color = $color;
        self:: $count_figure++;
    }
    public function get_color(){
        return $this->color;
    }
    public function get_width(){
        return $this->width;
    }
    public function get_height(){
        return $this->height;
    }

    public function set_color(string $color){
        $this->color = $color;
    }
    public function set_width(string $width){
        $this->color = $width;
    }
    public function set_height(string $height){
        $this->color = $height;
    }

    public function __toString() {
        return "Shape [width: {$this->width}, height: {$this->height}, color: {$this->color}]";
    }


    abstract public function calcPerimeter();
    public function getArea() {
        return $this->width * $this->height;
    }
}
