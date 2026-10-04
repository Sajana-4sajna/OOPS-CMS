<?php

// =====================================
// INTERFACE
// =====================================

interface Shape
{
    public function calculateArea();
}


// =====================================
// CIRCLE CLASS
// =====================================

class Circle implements Shape
{
    public $radius;

    // Constructor
    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    // Implement calculateArea()
    public function calculateArea()
    {
        return 3.14 * $this->radius * $this->radius;
    }
}


// =====================================
// SQUARE CLASS
// =====================================

class Square implements Shape
{
    public $side;

    // Constructor
    public function __construct($side)
    {
        $this->side = $side;
    }

    // Implement calculateArea()
    public function calculateArea()
    {
        return $this->side * $this->side;
    }
}


// =====================================
// CREATE OBJECTS
// =====================================

$circle = new Circle(5);

$square = new Square(4);


// =====================================
// DISPLAY OUTPUT
// =====================================

echo "<h2>Circle</h2>";

echo "Radius: " . $circle->radius . "<br>";

echo "Area: " . $circle->calculateArea();

echo "<br><br>";


echo "<h2>Square</h2>";

echo "Side: " . $square->side . "<br>";

echo "Area: " . $square->calculateArea();

?>