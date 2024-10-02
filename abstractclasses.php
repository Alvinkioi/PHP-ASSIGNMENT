<?php
// QUESTION 2: Example that demonstrates the implementation of an abstract class.

// Parent class
abstract class Car {
  // The Car class is declared as an abstract class.
  // This means you cannot create instances of this class directly; it serves as a template for its subclasses.
  
  public $name; // Property to store the name of the car

  // Constructor method to initialize the name property when a car is created
  public function __construct($name) {
    $this->name = $name; // Assign the provided name to the class property $name
  }

  // Abstract method that must be implemented by any subclass of Car
  abstract public function intro() : string;
}

// Child classes that extend the abstract Car class
class Audi extends Car {
  // Implementing the intro method for the Audi class
  public function intro() : string {
    // Return a string introducing the Audi car
    return "Choose German quality! I'm an $this->name!";
  }
}

class Volvo extends Car {
  // Implementing the intro method for the Volvo class
  public function intro() : string {
    // Return a string introducing the Volvo car
    return "Proud to be Swedish! I'm a $this->name!";
  }
}

class Citroen extends Car {
  // Implementing the intro method for the Citroen class
  public function intro() : string {
    // Return a string introducing the Citroen car
    return "French extravagance! I'm a $this->name!";
  }
}

// Create objects from the child classes
$audi = new Audi("Audi"); // Create an Audi object with the name "Audi"
echo $audi->intro(); // Call the intro method on the Audi object and print the output
echo "<br>"; // Line break for better readability in output

$volvo = new Volvo("Volvo"); // Create a Volvo object with the name "Volvo"
echo $volvo->intro(); // Call the intro method on the Volvo object and print the output
echo "<br>"; // Line break for better readability in output

$citroen = new Citroen("Citroen"); // Create a Citroen object with the name "Citroen"
echo $citroen->intro(); // Call the intro method on the Citroen object and print the output

/* CODE OUTPUT =>
Choose German quality! I'm an Audi!
Proud to be Swedish! I'm a Volvo!
French extravagance! I'm a Citroen!
*/
?>