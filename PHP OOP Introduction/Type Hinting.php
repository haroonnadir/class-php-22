<?php
function addNumbers(int $a, int $b): int {
    return $a + $b;
}
echo addNumbers(5, 10);  // Outputs: 15


function greet(string $name): string {
    return "Hello, " . $name;
}
echo greet("Alice");  // Outputs: Hello, Alice


function sumArray(array $numbers): int {
    return array_sum($numbers);
}
echo sumArray([1, 2, 3]);  // Outputs: 6
function printItems(iterable $items) {
    foreach ($items as $item) {
        echo $item . " ";
    }
}
printItems([1, 2, 3]);  // Outputs: 1 2 3


class User {
    public $name;
    public function __construct($name) {
        $this->name = $name;
    }
}
function greetUser(User $user): string {
    return "Hello, " . $user->name;
}
$user = new User("Bob");
echo greetUser($user);  // Outputs: Hello, Bob


function executeCallback(callable $callback, $data) {
    return $callback($data);
}
echo executeCallback('strtoupper', 'hello');  // Outputs: HELLO


function multiply(float $a, float $b): float {
    return $a * $b;
}
echo multiply(2.5, 4.0);  // Outputs: 10


function findUserById(int $id): ?User {
    // Suppose this function returns null if the user is not found
    return $id === 1 ? new User("Alice") : null;
}
$user = findUserById(2);
if ($user === null) {
    echo "User not found";
}


function sayHello(): void {
    echo "Hello!";
}
sayHello();  // Outputs: Hello!

class Animal {
    public function create(): self {
        return new self();
    }
}
class Dog extends Animal {
    public function create(): self {
        return new self();  // returns an instance of Dog
    }
}


?>