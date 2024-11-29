<?php
class Car {
    public $color;
    public $model;

    public function drive() {
        echo "The car is driving.<br/>";
    }
}

// Creating an object from the class
$myCar = new Car();
$myCar->color = "Red"; // Accessing a member variable
$myCar->model = "Tesla"; // Accessing a member variable
$myCar->drive(); // Calling a method

// Echoing the model and color
echo "The model of the car is: " . $myCar->model . "<br/>"; // Displaying the model
echo "The color of the car is: " . $myCar->color . "<br/>"; // Displaying the color

$newCar = new Car();
$newCar->color = "Blue";
$newCar->model = "Toyota";

echo "The model of the new car is: " . $newCar->model . "<br/>";
echo "The color of the new car is: " . $newCar->color . "<br/>";
?>
