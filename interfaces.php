<?php
// QUESTION 2: Include an example showcasing how interfaces can be implemented.

// This code demonstrates how different animal classes can implement the same interface 
// to define their own behaviors, allowing for flexibility and code reusability.

// Define an interface named Animal
/* 
interface Animal {
    // Declare a method makeSound() that any implementing class must define
    public function makeSound();
}

// Define the Cat class that implements the Animal interface
class Cat implements Animal {
    // Implement the makeSound method to output a sound specific to the Cat class
    public function makeSound() {
        echo "Meow"; // Output a cat sound
    }
}

// Create an instance of the Cat class
$animal = new Cat();
// Call the makeSound method on the Cat object, which will output "Meow"
$animal->makeSound(); // Outputs: Meow
*/

// Now let's assume we want to manage a group of animals.
// All animals can perform actions (like making sounds), but each animal does it in its own way.
// Using interfaces allows us to define a common behavior for all animals while allowing them to implement it differently.

// Interface definition
interface Animal {
    // Method signature for makeSound - must be implemented by any class that implements this interface
    public function makeSound();
}

// Class definitions
// Class Cat implementing the Animal interface
class Cat implements Animal {
    // Implementing the makeSound method for the Cat class
    public function makeSound() {
        echo " Meow "; // Output: Meow
    }
}

// Class Dog implementing the Animal interface
class Dog implements Animal {
    // Implementing the makeSound method for the Dog class
    public function makeSound() {
        echo " Bark "; // Output: Bark
    }
}

// Class Mouse implementing the Animal interface
class Mouse implements Animal {
    // Implementing the makeSound method for the Mouse class
    public function makeSound() {
        echo " Squeak "; // Output: Squeak
    }
}

// Create instances of each animal class
$cat = new Cat(); // Create a Cat object
$dog = new Dog(); // Create a Dog object
$mouse = new Mouse(); // Create a Mouse object

// Create an array to hold all animal instances
$animals = array($cat, $dog, $mouse); // Store Cat, Dog, and Mouse objects in an array

// Loop through each animal in the array and call their makeSound method
foreach($animals as $animal) {
    // Each animal will make its specific sound defined in its class
    $animal->makeSound(); // Calls makeSound() method for each animal
}

// OUTPUT => Meow Bark Squeak
?>
