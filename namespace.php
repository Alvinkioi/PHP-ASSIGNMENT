<?php
// QUESTION 2 : EXAMPLE DEMONSTRATING USE OF NAMESPACES
// Define a namespace for the first library
namespace LibraryA;

// Declare the User class within the LibraryA namespace
class User {
    // Method to return the name of the user
    public function getName() {
        return "User from Library A"; // Returns a string specific to Library A
    }
}

// Define a namespace for the second library
namespace LibraryB;

// Declare the User class within the LibraryB namespace
class User {
    // Method to return the name of the user
    public function getName() {
        return "User from Library B"; // Returns a string specific to Library B
    }
}

// Now we use the classes from different namespaces
// Create an instance of the User class from LibraryA
$userA = new \LibraryA\User(); // The backslash (\) indicates the global namespace
// Create an instance of the User class from LibraryB
$userB = new \LibraryB\User(); // Again, using the backslash to specify the full namespace

// Output the name from the LibraryA User instance
echo $userA->getName(); // Outputs: User from Library A
echo "\n"; // New line for better output readability

// Output the name from the LibraryB User instance
echo $userB->getName(); // Outputs: User from Library B
?>