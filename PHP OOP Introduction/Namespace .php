<?php
namespace MyApp\Utils;
class Logger {
    public function log($message) {
        echo "Logging message: $message";
    }
}

use MyApp\Utils\Logger;
$logger = new Logger();
$logger->log("This is a log message.");


namespace MyApp\Models;
class User {
    public function __construct($name) {
        $this->name = $name;
    }
    public function getName() {
        return $this->name;
    }
}


use MyApp\Utils\Logger as Log;
$logger = new Log();
$logger->log("This is a log message.");


namespace MyApp\Utils;
function strlen($string) {
    // Custom strlen function in MyApp\Utils namespace
    return \strlen($string) . " characters long";  // Calls the global strlen function
}
echo strlen("Hello");  // Outputs: 5 characters long

?>