<?php

class Car {
    public $color;
    public $model;

    public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
    }

    public function drive() {
        echo "Driving a $this->color $this->model.";
    }
}



class Person {
    private $name;

    public function setName($name) {
        $this->name = $name;
    }
    public function getName() {
        return $this->name;
    }
}



class Vehicle {
    public $wheels;
    public function start() {
        echo "Vehicle started.";
    }
}
class Bike extends Vehicle {
    public function ride() {
        echo "Riding a bike.";
    }
}
$myBike = new Bike();
$myBike->start(); // Outputs: Vehicle started.
$myBike->ride();  // Outputs: Riding a bike.


class Animal {
    public function sound() {
        echo "Some sound";
    }
}
class Dog extends Animal {
    public function sound() {
        echo "Bark";
    }
}
class Cat extends Animal {
    public function sound() {
        echo "Meow";
    }
}
$animals = [new Dog(), new Cat()];
foreach ($animals as $animal) {
    $animal->sound(); // Outputs: Bark and Meow
}



abstract class Shape {
    abstract public function area();
}
class Circle extends Shape {
    private $radius;
    public function __construct($radius) {
        $this->radius = $radius;
    }
    public function area() {
        return pi() * $this->radius * $this->radius;
    }
}
$circle = new Circle(5);
echo $circle->area(); // Outputs the area of the circle.


class Car {
    public $color;
    public $model;
    // Constructor function
    public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
    }
    public function drive() {
        echo "Driving a $this->color $this->model.";
    }
}
// Creating an object of the Car class
$myCar = new Car("red", "Toyota");
$myCar->drive(); // Outputs: Driving a red Toyota.


class Car {
    public $color;  // Public property

    public function drive() {  // Public method
        echo "Driving a $this->color car.";
    }
}

$myCar = new Car();
$myCar->color = "red";  // Accessible from outside the class
$myCar->drive();        // Accessible from outside the class


class Vehicle {
    protected $type;  // Protected property
    protected function start() {  // Protected method
        echo "Starting the $this->type.";
    }
}
class Car extends Vehicle {
    public function setType($type) {
        $this->type = $type;  // Accessible in the subclass
    }
    public function drive() {
        $this->start();  // Accessible in the subclass
        echo " Driving the $this->type car.";
    }
}
$myCar = new Car();
$myCar->setType("SUV");
$myCar->drive();  // Outputs: Starting the SUV. Driving the SUV car.


class Car {
    private $engineStatus;  // Private property
    private function startEngine() {  // Private method
        $this->engineStatus = "On";
        echo "Engine started.";
    }
    public function drive() {
        $this->startEngine();  // Accessible within the class
        echo " Driving the car.";
    }
}
$myCar = new Car();
$myCar->drive();  // Outputs: Engine started. Driving the car.
// The following will cause errors:
// $myCar->engineStatus = "Off";  // Not accessible from outside the class
// $myCar->startEngine();         // Not accessible from outside the class


class Animal {
    public $sound = "Some sound";  // Property in the parent class
}
class Dog extends Animal {
    public $sound = "Bark";  // Overridden property in the child class
}
$myDog = new Dog();
echo $myDog->sound;  // Outputs: Bark


class Animal {
    public function makeSound() {
        echo "Some generic animal sound";
    }
}
class Dog extends Animal {
    // Overridden method in the child class
    public function makeSound() {
        echo "Bark";
    }
}
$myDog = new Dog();
$myDog->makeSound();  // Outputs: Bark



class Animal {
    public function makeSound() {
        echo "Some generic animal sound";
    }
}
class Dog extends Animal {
    public function makeSound() {
        parent::makeSound();  // Calls the parent class's method
        echo " and Bark";
    }
}
$myDog = new Dog();
$myDog->makeSound();  // Outputs: Some generic animal sound and Bark


class Animal {
    public $type;
    public function __construct($type) {
        $this->type = $type;
    }
}
class Dog extends Animal {
    public $breed;
    public function __construct($type, $breed) {
        parent::__construct($type);  // Calls the parent constructor
        $this->breed = $breed;
    }
    public function displayInfo() {
        echo "Type: $this->type, Breed: $this->breed";
    }
}
$myDog = new Dog("Mammal", "Labrador");
$myDog->displayInfo();  // Outputs: Type: Mammal, Breed: Labrador

?>