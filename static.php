<?php
// QUESTION 2 = Provide an example of a class utilizing static properties and methods.
// Define the User class
class User {
    // Static property to keep track of the number of User instances
    private static $userCount = 0; // Initialized to zero; accessible only within this class

    // User properties
    public $name; // Public property to store the name of the user

    // Constructor method that initializes the User object
    public function __construct($name) {
        $this->name = $name; // Set the name property to the value passed when the object is created
        self::$userCount++; // Increment the static user count whenever a new instance is created
    }

    // Static method to retrieve the current user count
    public static function getUserCount() {
        return self::$userCount; // Return the current value of userCount
    }
}

// Creating user instances
$user1 = new User("Alice"); // Create a new User object named Alice
$user2 = new User("Bob");   // Create a new User object named Bob
$user3 = new User("Charlie");// Create a new User object named Charlie

// Getting the total number of users created
echo "Total number of users: " . User::getUserCount(); // Call the static method getUserCount to display the total number of users

// OUTPUT: Total number of users: 3

?>
