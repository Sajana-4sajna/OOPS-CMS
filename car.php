<?php

// ===============================
// INTERFACE
// ===============================

interface Vehicle
{
    public function startEngine();
    public function stopEngine();
}


// ===============================
// CAR CLASS
// ===============================

class Car implements Vehicle
{
    // Private properties (Encapsulation)
    private $make;
    private $model;
    private $year;

    // Constructor
    public function __construct($make, $model, $year)
    {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    // Getter for make
    public function getMake()
    {
        return $this->make;
    }

    // Setter for make
    public function setMake($make)
    {
        $this->make = $make;
    }

    // Getter for model
    public function getModel()
    {
        return $this->model;
    }

    // Setter for model
    public function setModel($model)
    {
        $this->model = $model;
    }

    // Getter for year
    public function getYear()
    {
        return $this->year;
    }

    // Setter for year
    public function setYear($year)
    {
        $this->year = $year;
    }

    // start() method
    public function start()
    {
        echo "Car started.<br>";
    }

    // displayInfo() method
    public function displayInfo()
    {
        echo "Make: " . $this->make . "<br>";
        echo "Model: " . $this->model . "<br>";
        echo "Year: " . $this->year . "<br>";
    }

    // Interface method
    public function startEngine()
    {
        echo "Car engine started.<br>";
    }

    // Interface method
    public function stopEngine()
    {
        echo "Car engine stopped.<br>";
    }

    // getDescription() method
    public function getDescription()
    {
        return "This is a " . $this->year . " " .
               $this->make . " " . $this->model . ".";
    }
}


// ===============================
// ELECTRIC CAR CLASS
// ===============================

class ElectricCar extends Car
{
    private $batteryCapacity;

    // Constructor
    public function __construct($make, $model, $year, $batteryCapacity)
    {
        parent::__construct($make, $model, $year);
        $this->batteryCapacity = $batteryCapacity;
    }

    // Getter for battery capacity
    public function getBatteryCapacity()
    {
        return $this->batteryCapacity;
    }

    // Setter for battery capacity
    public function setBatteryCapacity($batteryCapacity)
    {
        $this->batteryCapacity = $batteryCapacity;
    }

    // charge() method
    public function charge()
    {
        echo "Electric car is charging.<br>";
    }

    // Override getDescription()
    public function getDescription()
    {
        return "This is a " . $this->getYear() . " " .
               $this->getMake() . " " . $this->getModel() .
               " electric car with " .
               $this->batteryCapacity . " kWh battery.";
    }
}


// ===============================
// CREATE CAR OBJECT
// ===============================

echo "<h2>Car Information</h2>";

$car = new Car("Toyota", "Corolla", 2024);

$car->start();
$car->displayInfo();

echo "Description: " . $car->getDescription() . "<br><br>";

$car->startEngine();
$car->stopEngine();


// ===============================
// CREATE ELECTRIC CAR OBJECT
// ===============================

echo "<h2>Electric Car Information</h2>";

$electricCar = new ElectricCar(
    "Tesla",
    "Model 3",
    2025,
    75
);

$electricCar->start();
$electricCar->displayInfo();

$electricCar->charge();

echo "Battery Capacity: " .
     $electricCar->getBatteryCapacity() .
     " kWh<br>";

echo "Description: " .
     $electricCar->getDescription() .
     "<br><br>";

$electricCar->startEngine();
$electricCar->stopEngine();


// ===============================
// TEST SETTERS
// ===============================

$car->setMake("Honda");
$car->setModel("Civic");
$car->setYear(2023);

echo "<h2>Updated Car Information</h2>";

echo "Make: " . $car->getMake() . "<br>";
echo "Model: " . $car->getModel() . "<br>";
echo "Year: " . $car->getYear() . "<br>";

?>