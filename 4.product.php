<?php

class Product
{
    // Properties
    private $description;
    private $quantity;
    private $price;


    // Constructor
    public function __construct($description, $quantity, $price)
    {
        // Check description
        if (is_string($description)) {
            $this->description = $description;
        } else {
            echo "Error: Description must be a string.<br>";
        }

        // Check quantity
        if (is_numeric($quantity)) {
            $this->quantity = $quantity;
        } else {
            echo "Error: Quantity must be a number.<br>";
        }

        // Check price
        if (is_numeric($price)) {
            $this->price = $price;
        } else {
            echo "Error: Price must be a number.<br>";
        }
    }


    // Setter for description
    public function setDescription($description)
    {
        if (is_string($description)) {
            $this->description = $description;
        } else {
            echo "Error: Description must be a string.<br>";
        }
    }


    // Getter for description
    public function getDescription()
    {
        return $this->description;
    }


    // Setter for quantity
    public function setQuantity($quantity)
    {
        if (is_numeric($quantity)) {
            $this->quantity = $quantity;
        } else {
            echo "Error: Quantity must be a number.<br>";
        }
    }


    // Getter for quantity
    public function getQuantity()
    {
        return $this->quantity;
    }


    // Setter for price
    public function setPrice($price)
    {
        if (is_numeric($price)) {
            $this->price = $price;
        } else {
            echo "Error: Price must be a number.<br>";
        }
    }


    // Getter for price
    public function getPrice()
    {
        return $this->price;
    }


    // Calculate total price
    public function calculatePrice()
    {
        return $this->quantity * $this->price;
    }
}


// Create Product object
$product = new Product("Laptop", 2, 75000);


// Print all properties
echo "Description: " . $product->getDescription() . "<br>";
echo "Quantity: " . $product->getQuantity() . "<br>";
echo "Price: " . $product->getPrice() . "<br>";


// Print calculated price
echo "Total Price: " . $product->calculatePrice();

?>