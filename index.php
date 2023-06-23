<?php

use App\figure\Square;
use App\figure\Rectangle;
use App\Controllers\API\Shape;
// подключаем класс User
// require_once 'App\User.php';


spl_autoload_register(function ($class) {
    $filePath = str_replace('\\', '/', $class) . '.php';
    if (file_exists($filePath)) {
        require_once $filePath;
    }
});

// $shape = new Shape(17, 26, "red");
$shape = new Rectangle(17, 26, "red");
// $loat = new Shape(5, 5, "Pink");
echo "shape : " . $shape;
echo "<pre>";
echo "pirimetr : " . $shape->calcPerimeter();
// echo "shape : " . $loat; 
echo "<pre>";

$rectangle = new Rectangle(5, 10, "blue");
// echo $rectangle->calcPerimeter();  // Output: 30
echo "getArea :" . $shape->getArea();
$square = new Square(6, "red");
echo "<pre>";
// echo $square->calcPerimeter();   



$perimeter = (new class(5, "blue") extends Square {
    public function __construct(float $sideLength, string $color) {
        parent::__construct($sideLength, $color);
    }
})->calcPerimeter();

echo "Perimeter: " . $perimeter;
