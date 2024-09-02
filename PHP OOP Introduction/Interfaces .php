<?php
class Car implements Drivable {
    public function startEngine() {
        echo "Engine started.";
    }
    public function stopEngine() {
        echo "Engine stopped.";
    }
    public function drive() {
        echo "Driving the car.";
    }
}
$myCar = new Car();
$myCar->startEngine();  // Outputs: Engine started.
$myCar->drive();        // Outputs: Driving the car.
$myCar->stopEngine();   // Outputs: Engine stopped.



interface Flyable {
    public function takeOff();
    public function land();
}
class FlyingCar implements Drivable, Flyable {
    public function startEngine() {
        echo "Engine started.";
    }
    public function stopEngine() {
        echo "Engine stopped.";
    }
    public function drive() {
        echo "Driving the car.";
    }
    public function takeOff() {
        echo "Taking off.";
    }
    public function land() {
        echo "Landing.";
    }
}
$myFlyingCar = new FlyingCar();
$myFlyingCar->startEngine();  // Outputs: Engine started.
$myFlyingCar->drive();        // Outputs: Driving the car.
$myFlyingCar->takeOff();      // Outputs: Taking off.
$myFlyingCar->land();         // Outputs: Landing.
$myFlyingCar->stopEngine();   // Outputs: Engine stopped.


interface Vehicle {
    public function start();
    public function stop();
}
interface Drivable extends Vehicle {
    public function drive();
}
class Car implements Drivable {
    public function start() {
        echo "Car started.";
    }

    public function stop() {
        echo "Car stopped.";
    }
    public function drive() {
        echo "Driving the car.";
    }
}
$myCar = new Car();
$myCar->start();  // Outputs: Car started.
$myCar->drive();  // Outputs: Driving the car.
$myCar->stop();   // Outputs: Car stopped.

?>