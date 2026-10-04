<?php

// ==============================
// Student Class
// ==============================

class Student
{
    // Public properties
    public $name;
    public $surname;
    public $country;

    // Private property
    private $tuition;

    // Protected property
    protected $indexNumber;


    // Getter for name
    public function getName()
    {
        return $this->name;
    }


    // Getter for surname
    public function getSurname()
    {
        return $this->surname;
    }


    // Public method
    public function helloWorld()
    {
        return "Hello World";
    }


    // Protected method
    protected function helloFamily()
    {
        return "Hello Family";
    }


    // Private method
    private function helloMe()
    {
        return "Hello me!";
    }


    // Private getter for tuition
    private function getTuition()
    {
        echo "Tuition: " . $this->tuition . "<br>";
    }


    // Public method to set tuition
    // Needed because tuition is private
    public function setTuition($tuition)
    {
        $this->tuition = $tuition;
    }


    // Public method to call private methods
    public function showPrivateMethods()
    {
        echo $this->helloMe() . "<br>";
        $this->getTuition();
    }
}


// ==============================
// PartTimeStudent Class
// ==============================

class PartTimeStudent extends Student
{
    // Public method
    public function helloParent()
    {
        return $this->helloFamily();
    }
}


// ==============================
// Student Object
// ==============================

$student = new Student();

$student->name = "Sajana";
$student->surname = "Thapa";
$student->country = "Nepal";
$student->setTuition(50000);

echo "<h2>Student Information</h2>";

echo "Name: " . $student->getName() . "<br>";
echo "Surname: " . $student->getSurname() . "<br>";
echo "Country: " . $student->country . "<br>";

echo $student->helloWorld() . "<br>";

$student->showPrivateMethods();


// ==============================
// PartTimeStudent Object
// ==============================

$partTimeStudent = new PartTimeStudent();

$partTimeStudent->name = "Ram";
$partTimeStudent->surname = "Sharma";
$partTimeStudent->country = "Nepal";
$partTimeStudent->setTuition(30000);

echo "<h2>Part Time Student Information</h2>";

echo "Name: " . $partTimeStudent->getName() . "<br>";
echo "Surname: " . $partTimeStudent->getSurname() . "<br>";
echo "Country: " . $partTimeStudent->country . "<br>";

echo $partTimeStudent->helloWorld() . "<br>";

// Calls protected helloFamily() through public method
echo $partTimeStudent->helloParent() . "<br>";

$partTimeStudent->showPrivateMethods();

?>