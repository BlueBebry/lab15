<?php
abstract class Figure {
    protected $area;
    protected $color;
    protected $sidesCount;

    abstract public function infoAbout();
}

interface ShapeInterface {
    public function getArea();
}

class Rectangle extends Figure implements ShapeInterface {
    private $a;
    private $b;

    public function __construct($a, $b) {
        $this->a = $a;
        $this->b = $b;
        $this->sidesCount = 4;
    }

    public function getArea() {
        $this->area = $this->a * $this->b;
        return $this->area;
    }

    public function infoAbout() {
        return "Это класс прямоугольника. У него {$this->sidesCount} стороны.";
    }
}

class Square extends Figure implements ShapeInterface {
    private $a;

    public function __construct($a) {
        $this->a = $a;
        $this->sidesCount = 4;
    }

    public function getArea() {
        $this->area = $this->a * $this->a;
        return $this->area;
    }

    public function infoAbout() {
        return "Это класс квадрата. У него {$this->sidesCount} стороны.";
    }
}

$rect1 = new Rectangle(5, 10);
echo "Задание 1. " . "Площадь прямоугольника: " . $rect1->getArea();
$sq1 = new Square(5);
echo "<br>Задание 2. " . "Площадь квадрата: " . $sq1->getArea();
?>
