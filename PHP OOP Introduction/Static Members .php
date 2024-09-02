<?php
class MathHelper {
    public static $pi = 3.14159;  // Static property
    public static function calculateArea($radius) {  // Static method
        return self::$pi * $radius * $radius;
    }
}



echo MathHelper::$pi;  // Outputs: 3.14159
$area = MathHelper::calculateArea(5);
echo $area;  // Outputs: 78.53975


class Counter {
    public static $count = 0;

    public static function increment() {
        self::$count++;
    }
}
Counter::increment();
Counter::increment();
echo Counter::$count;  // Outputs: 2


class ParentClass {
    public static function whoAmI() {
        echo "I am the ParentClass.";
    }
    public static function identify() {
        self::whoAmI();  // Early static binding: refers to ParentClass::whoAmI()
    }
}
class ChildClass extends ParentClass {
    public static function whoAmI() {
        echo "I am the ChildClass.";
    }
}
ChildClass::identify();  // Outputs: I am the ParentClass.


trait Logger {
    public function log($message) {
        echo "Logging message: $message";
    }
}
class User {
    use Logger;  // Use the Logger trait in this class
    public function createUser($username) {
        // Some code to create a user
        $this->log("User $username created.");
    }
}
$user = new User();
$user->createUser("john_doe");  // Outputs: Logging message: User john_doe created.


trait Logger {
    public function log($message) {
        echo "Logging message: $message";
    }
}
trait Notifier {
    public function notify($message) {
        echo "Sending notification: $message";
    }
}
class User {
    use Logger, Notifier;  // Use both Logger and Notifier traits

    public function createUser($username) {
        // Some code to create a user
        $this->log("User $username created.");
        $this->notify("Welcome, $username!");
    }
}
$user = new User();
$user->createUser("john_doe");
// Outputs:
// Logging message: User john_doe created.
// Sending notification: Welcome, john_doe!


trait A {
    public function sayHello() {
        echo "Hello from Trait A";
    }
}
trait B {
    public function sayHello() {
        echo "Hello from Trait B";
    }
}
class MyClass {
    use A, B {
        B::sayHello insteadof A;  // Use B's sayHello() method
        A::sayHello as sayHelloFromA;  // Alias A's sayHello() method
    }
}
$obj = new MyClass();
$obj->sayHello();  // Outputs: Hello from Trait B
$obj->sayHelloFromA();  // Outputs: Hello from Trait A

class BaseClass {
    public function sayHello() {
        echo "Hello from BaseClass";
    }
}
trait Logger {
    public function log($message) {
        echo "Logging: $message";
    }
}
class DerivedClass extends BaseClass {
    use Logger;

    public function greet() {
        $this->sayHello();
        $this->log(" Greeting logged.");
    }
}
$derived = new DerivedClass();
$derived->greet();
// Outputs:
// Hello from BaseClass
// Logging:  Greeting logged.

?>