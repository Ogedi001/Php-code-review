
<?php
#started learning php

// ECHO "Hello! ";
// echo "Welcome to Developer News<br/>";
// EcHo "Enjoy all of the ad-free articles<br>";

// $x = 5;
// $y = 10.5;
// echo $y - $x;

//...scoping in php
// $x = 5; // global scope
 
// function myTest() {
//   // using x inside this function will generate an error
//   echo "<p>Variable x inside function is: $x</p>";
// } 
// myTest();

// echo "<p>Variable x outside function is: $x</p>";

// 
// $x = 5;
// function begin(){
//     // Using global for x
//     global $x;
//     //
//     $y = $GLOBALS['x'];
//     echo "<p>Variable x inside function is: $x</p>";
//     echo $y;
//      $y++;
// echo "<p>Incremented y inside function is: $y</p>";
// }

// begin();
// echo "<br>";
// begin();
// echo "<br>";

//using static keyword , it retains variables value between functions
// function myTest() {
//   static $x = 0;
//   echo $x;
//   $x++;
// }

// myTest();//0
// myTest();//1
// myTest()//2


// $txt1 = "Learn PHP";
// $txt2 = "W3Schools.com";
// $x = 5;
// $y = 4;

// echo "<h2>" . $txt1 . "</h2>";
// echo "Study PHP at " . $txt2 . "<br>";
// echo $x + $y;

// string position
// echo strpos('hello world!', 'or');
// // constance definition
// //contance are automatically GLOBAL
// define('GREET', 'Helloo');

// echo GREET;

// Define the first constant
// define('NUM1', 10);

// // Define the second constant
// define('NUM2', 5);

// // Add the constants and store the result in another constant
// define('SUM', NUM1 + NUM2);

// // Use the SUM constant
// echo 'The sum of NUM1 and NUM2 is ' . SUM
 

// $items = array('A','B','C','D','E');
// $current_item =0;
// function rollover(){
//     global $items;
//     global $current_item;
//     $item = $items[$current_item];
// $current_item =($current_item + 1) % count($items);
// return $item;
// }


// for ($i=0; $i <8 ; $i++) { 
//     # code...
//     echo rollover();
// }


//while loop
// $x = 1;

// while($x <= 5) {
//   echo "The number is: $x <br>";
// // $x++; //if this is comment out code will run to infinity cos x value didnt change.

// }

//adding another file to php file
 //require 'index.html';
// Check if the form was submitte
// $name1 = ['john','michael'];
// echo $name1[0];
// $data = array("apple", "banana", "cherry");
// echo $data.'jjdkdkdk';

// print_r($data);

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Access form data using the $_POST superglobal
//     $name = $_POST["name"];
//     $email = $_POST["email"];

//     // Now you can use $name and $email in your PHP script
//     echo "Name: " . $name . "<br>";
//     echo "Email: " . $email . "<br>";}

?> 
