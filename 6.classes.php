<?php

// =====================================
// USER CLASS
// =====================================

class User
{
    // Protected properties
    protected $name;
    protected $surname;
    protected $username;

    // Default value is false
    protected $is_admin = false;


    // Constructor
    public function __construct($name, $surname, $username)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->username = $username;
    }


    // Check if user is admin
    public function isAdmin()
    {
        return $this->is_admin;
    }


    // Print full name
    public function printFullName()
    {
        if ($this->is_admin == true) {
            echo $this->name . " " . $this->surname . " (admin)";
        } else {
            echo $this->name . " " . $this->surname;
        }
    }
}


// =====================================
// CUSTOMER CLASS
// =====================================

class Customer extends User
{
    // Private properties
    private $city;
    private $state;
    private $country;


    // Constructor
    public function __construct($name, $surname, $username)
    {
        parent::__construct($name, $surname, $username);
    }


    // Setter for city
    public function setCity($city)
    {
        $this->city = $city;
    }


    // Getter for city
    public function getCity()
    {
        return $this->city;
    }


    // Setter for state
    public function setState($state)
    {
        $this->state = $state;
    }


    // Getter for state
    public function getState()
    {
        return $this->state;
    }


    // Setter for country
    public function setCountry($country)
    {
        $this->country = $country;
    }


    // Getter for country
    public function getCountry()
    {
        return $this->country;
    }


    // Location method
    public function location()
    {
        return $this->city . ", " .
               $this->state . ", " .
               $this->country;
    }
}


// =====================================
// ADMIN USER CLASS
// =====================================

class AdminUser extends User
{
    // Constructor
    public function __construct($name, $surname, $username)
    {
        parent::__construct($name, $surname, $username);

        // Set admin value to true
        $this->is_admin = true;
    }
}


// =====================================
// CREATE OBJECTS
// =====================================

// User object
$user = new User(
    "Sajana",
    "Thapa",
    "sajana123"
);


// Customer object
$customer = new Customer(
    "Ram",
    "Sharma",
    "ram123"
);

$customer->setCity("Kathmandu");
$customer->setState("Bagmati");
$customer->setCountry("Nepal");


// Admin object
$admin = new AdminUser(
    "Hari",
    "Gurung",
    "admin123"
);


// =====================================
// DISPLAY OUTPUT
// =====================================

echo "<h2>User</h2>";

$user->printFullName();
echo "<br>";

echo "Is Admin: ";
echo $user->isAdmin() ? "true" : "false";

echo "<br><br>";


echo "<h2>Customer</h2>";

$customer->printFullName();
echo "<br>";

echo "Is Admin: ";
echo $customer->isAdmin() ? "true" : "false";

echo "<br>";

echo "Location: " . $customer->location();

echo "<br><br>";


echo "<h2>Admin User</h2>";

$admin->printFullName();
echo "<br>";

echo "Is Admin: ";
echo $admin->isAdmin() ? "true" : "false";

?>