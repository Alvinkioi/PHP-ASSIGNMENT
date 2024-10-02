<?php
/*
// QUESTION 2 : Give an example of a trait and its usage in a class.
// Define a trait named message1
trait message1 {
    // Define a method msg1 within the trait
    public function msg1() {
        // This method outputs a message when called
        echo "OOP is fun! "; 
    }
}

// Define a class named Welcome
class Welcome {
    // Use the message1 trait in the Welcome class
    use message1; 
}

// Create an instance of the Welcome class
$obj = new Welcome();

// Call the msg1 method from the message1 trait using the Welcome class object
$obj->msg1(); 
// This will output: OOP is fun!
//If other classes need to use the msg1() function, simply use the message1 trait in those classes.
//This reduces code duplication, because there is no need to redeclare the same method over and over again.
*/


//USING MULTIPLE TRAITS
// Define a trait named message1
trait message1 {
    // Method msg1 that outputs a message
    public function msg1() {
        echo "OOP is fun! ";
    }
}

// Define a trait named message2
trait message2 {
    // Method msg2 that outputs a different message
    public function msg2() {
        echo "OOP reduces code duplication!";
    }
}

// Define a class named Welcome
class Welcome {
    // Use the message1 trait in the Welcome class
    use message1; 
}

// Define another class named Welcome2
class Welcome2 {
    // Use both message1 and message2 traits in the Welcome2 class
    use message1, message2; 
}

// Create an instance of the Welcome class
$obj = new Welcome();
// Call the msg1 method from the message1 trait
$obj->msg1(); // Outputs: OOP is fun!
echo "<br>"; // Outputs a line break for better formatting

// Create an instance of the Welcome2 class
$obj2 = new Welcome2();
// Call the msg1 method from the message1 trait using the Welcome2 object
$obj2->msg1(); // Outputs: OOP is fun!
// Call the msg2 method from the message2 trait using the Welcome2 object
$obj2->msg2(); // Outputs: OOP reduces code duplication!
?>